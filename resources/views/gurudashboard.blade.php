@extends('layout.navbar')
@section('main')
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg border border-gray-300 w-full max-w-3xl">
        <!-- Header -->
        <div class="text-center p-6 border-b">
            <h1 class="text-2xl font-bold uppercase">Aplikasi Kegiatan Harian Guru</h1>
            <p class="text-lg text-gray-600 font-semibold">Tahun Ajaran 2018 - 2019</p>
            <div class="border-t border-dotted border-black mt-2"></div>
        </div>

        <!-- Content -->
        <div class="p-6 text-center">
            <div class="flex justify-center mb-4">
                <img src="{{asset('img/logosmkncompreng.png')}}" 
                     alt="Logo SMK" class="w-25 h-25">
            </div>
            <div class="text-center space-y-2">
                <p class="font-semibold"><span class="text-gray-700">Nama</span> : <span class="font-bold"> {{Auth::user()->name}}</span></p>
                <p class="font-semibold"><span class="text-gray-700">NIP/NUPTK</span> : <span class="font-bold"> {{Auth::user()->nip}}</span></p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center py-4 rounded-b-lg">
            <h2 class="text-center-xl font-bold">SMK NEGERI COMPRENG</h2>
            <p class="text-center-gray-600 ">Kec. Compreng, Kabupaten Subang, Jawa Barat 41258</p>
            <p class="text-center-gray-600">Email: smkncompreng@gmail.com</p>
        </div>
    </div>
</div>


{{-- 
    <div class="container pt-4">
        <div class="alert alert-success alert-dismissible fade show overflow-auto" style="max-height: 3000px;" role="alert">
            <strong>Selamat</strong> Datang<strong></strong> Pada projek agenda Ini</i>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    <div class="container mt-5 pt-3">
        <div class="card md-col-4 shadow">
            <div class="card-header">
                <div class="header">
                    <img src=""  class="rounded-circle" alt="Logo Sekolah">
                    <h1>APLIKASI KEGIATAN AGENDA GURU</h1>  
                    <p  class="text-dark"><strong>SMK NEGERI COMPRENG</strong></p>  
                    <p class="text-dark">TAHUN AJARAN : 2024-2025</b></p> 
                    <hr>
                </div>
            
                <div class="content">
                    <p class="text-dark"><strong>Nama:</strong></p>
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
    </div> --}}


@endsection

