@extends('layout.sidebar')
@section('main')
<div class="alert alert-warning alert-dismissible fade show overflow-auto" style="max-height: 3000px;" role="alert">
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
   
    </div>
</div>

@endsection