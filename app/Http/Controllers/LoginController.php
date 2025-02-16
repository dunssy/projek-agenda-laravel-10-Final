<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('auth.login',['title'=>'Login']);
    }
    
    public function store(Request $request){

       $request->validate([
          'email'=>'required',
          'password'=>'required'
       ],
       [ 
        // Menampilkan sebuah pesan jika user tidak menginput data pada form login 
        'email.required'=>'Email Tidak Boleh Kosong',
        'password.required'=>'Password Tidak Boleh Kosong'
       ]
       ); 
       // Menyimpan data dari validate  
       $infologin = [
        'email'=> $request->email,
        'password'=>$request->password
       ];
    //mengecek data pada login untuk di sandingkan dengan database
        if(Auth::attempt($infologin)){
            //Mengecek Level 
            if(Auth::user()->level == 'admin'){
                // User admin
                    return redirect('dashboard')->with('info','Selamat Datang Kembali');        
            }elseif(Auth::user()->level == 'kepsek'){
                // User Kepsek
                    return redirect('agenda'); 
            }elseif(Auth::user()->level == 'guru'){
                // User Guru
                    return redirect('dashboard/guru')->with('info','Selamat Datang Kembali');
            } 
        }else{
            // Jika login gagal kembalikan ke form login awal dengan mengirim sebuah pesan eror 
            return redirect('login')->with('error','Username Dan Password Salah');

    }

    }

    public function logout(){
        // User Logout 
        Auth::logout();
        // Kembalikan pada form login 
         return redirect('/login');
    }
}
    