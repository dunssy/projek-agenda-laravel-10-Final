@extends('layout.sidebar')
@section('main')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Selamat</strong> Datang<strong> {{Auth::user()->name}}</strong> Pada projek agenda Ini Anda Sebagai <i>{{Auth::user()->level}}</i>.
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
               
            </div>
        </div>
        <!-- Right side: Cards -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="card-header">Agenda Hari ini</div>
                            <h2>0</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="card-header">Semua Agenda</div>
                            <h2>31</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="card-header">Jumlah Guru</div>
                            <h2>7</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card bg-secondary">
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