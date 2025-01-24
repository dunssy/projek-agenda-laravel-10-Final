@extends('layout.sidebar')
@section('main')
<div class="alert alert-success alert-dismissible fade show overflow-auto" style="max-height: 3000px;" role="alert">
    <strong>Selamat</strong> Datang<strong> {{Auth::user()->username}}</strong> Pada projek agenda Ini.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container mt-4">
            <div class="row mt-3">
        <!-- Left side: Information Box -->
        <div class="col-md-6">
            <div class="info-box">
                <h5>Informasi Terkini:</h5>
            {{-- Carsouel --}}
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('img/1.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item active">
                            <img src="{{asset('img/2.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item active">
                            <img src="{{asset('img/1.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right side: Cards -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card bg-success">
                        <div class="card-body">
                            @php
                            $skrg = date('Y-m-d');
                            $agenda = DB::table('Agenda')->where('tgl', $skrg)->count();
                            @endphp
                            <div class="card-header">Agenda Hari ini</div>
                            <h2>{{$agenda}}</h2>
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="card-header">Semua Agenda</div>
                            @php
                                $totalUsers = DB::table('Agenda')->count();
                            @endphp
                            <h2>{{$totalUsers}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="card-header"><a href="/guru">Jumlah Guru</a></div>
                            @php
                                $totalUsers = DB::table('users')->count();
                            @endphp
                            <h2>{{$totalUsers}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="card-header"><a href="/kelas">Jumlah Kelas</a></div>
                            @php
                                $totalUsers = DB::table('kelas')->count();
                            @endphp
                            <h2>{{$totalUsers}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="card-header"><a href="/jurusan">Jumlah Jurusan</a></div>
                            @php
                                $totalUsers = DB::table('jurusan')->count();
                            @endphp
                            <h2>{{$totalUsers}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="card-header">File Perangkat</div>
                            <h2>11</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection