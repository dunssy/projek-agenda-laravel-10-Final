@extends('layout.main')
@section('konten')
    <div class="container py-4">

        <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
        <div class="card">
            <div class="card-header">
                <h1>{{$data->nama}}</h1>
            </div>
            <div class="card-body">
                <b>NOMOR INDUK:</b>{{$data->no_induk}}
            </div>
        </div>
    </div>
@endsection