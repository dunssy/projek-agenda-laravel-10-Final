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
        ],[
            'email.required'=>'email Wajib di isi',
            'password.required'=>'password di isi'
        ]);

        $dataLogin = [
         'email'=>$request->input('email'),
         'password'=>$request->input('password'),
        ];

        if(Auth::attempt($dataLogin)){
        //   JIka otentikasi 
        return "berhasil";
        }else{
        // Jika Gagal 
        return "gagal";
        }
    }
}
