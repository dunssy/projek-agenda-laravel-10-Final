<?php

namespace App\Http\Controllers;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class DashboardGuru extends Controller
{
    public function index(){
        $data = TahunAjaran::where('id_ajaran','ajaran');
        return view('gurudashboard', ['title'=>'Halaman Guru','halaman'=>'Agenda'])->with('data',$data);
    }
}
