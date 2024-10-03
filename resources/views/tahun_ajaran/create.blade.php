@extends('layout.sidebar')
@section('main')
    <a href="/kelas" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1 class="card-title text-start">{{$halaman}}</h1>
            </div>
            <div class="card-body">
            <form action="/tahun_ajaran" method="POST">
             @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nama" id="floatingInput" value="{{Session::get('nama')}}">
                    <label for="floatingInput">Tahun Ajaran</label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" name="save">simpan</button>
                </div>
            </form>
            </div>
        </div>
@endsection