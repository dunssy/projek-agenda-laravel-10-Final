@extends('layout.sidebar')
@section('main')
    <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
            </ul>
            <div class="container mt-4">
                <div class="row">
                    <!-- New Orders -->
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3 shadow">
                            <div class="card-body">
                                @php
                                 $skrg = date('Y-m-d');
                                 $agenda = DB::table('agenda')->where('tgl', $skrg)->count();     
                                @endphp
                                <h5 class="card-title">{{$agenda}}</h5>
                                <p class="card-text text-white">Agenda Hari Ini</p>
                            </div>
                            <div class="card-footer text-white">
                                {{-- <a href="#" class="text-white">Not info</a> --}}
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bounce Rate -->
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3 shadow">
                            <div class="card-body">
                                @php
                                $totalAgenda = DB::table('agenda')->count();
                                @endphp
                                <h5 class="card-title">{{$totalAgenda}}</h5>
                                <p class="card-text text-white">Semua Agenda</p>
                            </div>
                            <div class="card-footer text-white">
                                {{-- <a href="#" class="text-white">Not info</a> --}}
                            </div>
                        </div>
                    </div>
                    
                    <!-- Guru-->
                    <div class="col-md-3">
                        <div class="card text-white bg-warning mb-3 shadow">
                            <div class="card-body">
                            @php
                                $user = DB::table('users')->count();
                            @endphp
                                <h5 class="card-title">{{$user}}</h5>
                                <p class="card-text text-white">Guru</p>
                            </div>
                            <div class="card-footer text-white">
                                <a href="/guru" class="text-white">More info <ion-icon name="arrow-forward"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mapel -->
                    <div class="col-md-3">
                        <div class="card text-white bg-info mb-3 shadow" >
                            <div class="card-body">
                                @php
                                    $mapel = DB::table('mapel')->count();
                                @endphp
                                <h5 class="card-title">{{$mapel}}</h5>
                                <p class="card-text text-white">Mapel</p>
                            </div>
                            <div class="card-footer text-white">
                                <a href="/mapel" class="text-white">More info <ion-icon name="arrow-forward"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                    {{-- Kelas --}}
                    <div class="col-md-3">
                        <div class="card text-white bg-info mb-3 shadow " >
                            <div class="card-body">
                                @php
                                    $kelas = DB::table('kelas')->count();
                                @endphp
                                <h5 class="card-title">{{$kelas}}</h5>
                                <p class="card-text text-white">Kelas</p>
                            </div>
                            <div class="card-footer text-white">
                                <a href="/kelas" class="text-white">More info <ion-icon name="arrow-forward"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                    {{-- Jurusan --}}
                    <div class="col-md-3">
                        <div class="card text-white bg-info mb-3 shadow " >
                            <div class="card-body">
                                @php
                                    $jurusan = DB::table('jurusan')->count();
                                @endphp
                                <h5 class="card-title">{{$jurusan}}</h5>
                                <p class="card-text text-white">Jurusan</p>
                            </div>
                            <div class="card-footer text-white">
                                <a href="/jurusan" class="text-white">More info <ion-icon name="arrow-forward"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   

   

    
@endsection