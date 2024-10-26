<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class DashboardGuru extends Controller
{
    //

    public function profile(){
        return view('client.index',['title'=>'profile','halaman'=>'setting']);
    }

    public function index(){
        $data = TahunAjaran::where('id_ajaran','ajaran');
        return view('gurudashboard', ['title'=>'Halaman Guru','halaman'=>'Agenda'])->with('data',$data);
    }
}
