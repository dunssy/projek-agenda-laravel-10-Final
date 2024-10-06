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
        'email.required'=>'Email Harus di isi',
        'password.required'=>'Password Harus di isi'
       ]
       );

       $infologin = [
        'email'=> $request->email,
        'password'=>$request->password
       ];

       if(Auth::attempt($infologin)){
        if(Auth::user()->level == 'admin'){
            redirect('admin');
        }elseif(Auth::user()->level == 'kepsek'){
            return redirect('admin/uji');
        }elseif(Auth::user()->level == 'guru'){
            return redirect('admin/coba');

        } 
        return redirect('login')->withErrors('Email Dan Password Tidak Sesuai')->withInput();
       }
    }

    public function logout(){
        Auth::logout();
        redirect('/login');
    }
}
