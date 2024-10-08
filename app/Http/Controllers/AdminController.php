<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return Redirect('guru');
    }
    public function kepsek()
    {
         return "halo Selamat Datang Di Halaman Kepsek <h1>" . Auth::user()->name . "</h1>
         <a href='/logout'>Loguot ></a>";
    }
    public function guru()
    {
         return "halo Selamat Datang Di Halaman Guru <h1>" . Auth::user()->name . "</h1>
         <a href='/logout'>Loguot ></a>";
    }

}
