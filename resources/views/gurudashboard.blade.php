@extends('layout.navbar')
@section('main')
<div class="container pt-4">
    <div class="alert alert-success alert-dismissible fade show overflow-auto" style="max-height: 3000px;" role="alert">
        <strong>Selamat</strong> Datang<strong> {{Auth::user()->name}}</strong> Pada projek agenda Ini</i>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<div class="container mt-5 pt-3">
    <div class="card md-col-4 shadow">
        <div class="card-header">
            <div class="header">
                <img src="{{asset('img/logosmkncompreng.png')}}"  class="rounded-circle" alt="Logo Sekolah">
                <h1>APLIKASI KEGIATAN AGENDA GURU</h1>  
                <p  class="text-dark"><strong>SMK NEGERI COMPRENG</strong></p> 
                <p class="text-dark">TAHUN AJARAN : <b>11-2024-19</b></p> 
                <hr>
            </div>
        
            <div class="content">
                <p class="text-dark"><strong>Nama:</strong> {{Auth::user()->name}}</p>
                <p class="text-dark"><strong>NIP:</strong> 123231</p>
            </div>
            <div class="footer">
              
                <p class="text-dark">Alamat : {{Auth::user()->alamat}}</p>
                <p  class="text-dark">Email : <b>{{Auth::user()->email}}</b></p>
            </div>
            <div class="card-body ">
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
    </div>

@endsection