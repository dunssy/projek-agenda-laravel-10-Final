@extends('layout.navbar')
@section('main')
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
                    <img src="{{asset('img/logosmkncompreng.png')}}"  class="rounded-circle" alt="Logo Sekolah" style="width: 100; height:100; ">
                    <p  class="text-dark"><strong>SMK NEGERI COMPRENG</strong></p>  
                    <h1>APLIKASI KEGIATAN AGENDA GURU</h1> 
                    @php
                    use App\Models\TahunAjaran;
                        $ajaran = TahunAjaran::where('status', 'Y')->get();
                    @endphp         
                    @foreach ($ajaran as $item)     
                    <p class="text-dark">TAHUN AJARAN : {{$item->ajaran}}</b></p> 
                    @endforeach             
                    <hr>
                </div>
            
                <div class="content">
                    <p class="text-dark"><strong>Nama: {{Auth::user()->name}}</strong></p>
                    <p class="text-dark"><strong>NIP: {{Auth::user()->nip}}</strong></p>
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

