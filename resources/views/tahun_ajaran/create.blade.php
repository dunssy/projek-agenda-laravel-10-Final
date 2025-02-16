@extends('layout.sidebar')
@section('main')
    <a href="/kelas" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1 class="card-title text-start">{{$halaman}}</h1>
            </div>
            <div class="card-body">
                @if ($errors->any()) 
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $item)    
                        <li>{{$item}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  
            <form action="/tahun_ajaran" method="POST">
             @csrf
             <div class="row">
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama" id="nama" value="{{Session::get('nama')}}">
                        <label for="nama">Tahun Ajaran</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select name="status" class="form-select" id="status" >
                            <option value="" disable>Pilih...</option>
                            <option value="Y">Aktif</option>
                            <option value="T">Non Aktif</option>
                        </select>
                        <label for="status">Status</label>
                    </div>
                </div>
             </div>
             
                <div class="d-grid gap-2 d-md-block pt-3">
                    <button class="btn btn-primary" type="submit" name="save">simpan</button>
                </div>
            </form>
            </div>
        </div>
@endsection