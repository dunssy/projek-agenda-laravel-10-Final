<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelGuru extends Controller
{
    public function index(){
        return view('client.mata_pelajaran.index',['title'=>'Mapel']);
    }
}
