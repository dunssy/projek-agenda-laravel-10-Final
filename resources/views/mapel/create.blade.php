@extends('layout.sidebar')
@section('main')
    <a href="/mapel" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow col-19">
            <div class="card-header">
                <h4 class="card-title text-start">{{$halaman}}</h4>
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
            <form action="/mapel" method="POST">
             @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control col-4" name="nama" id="floatingInput" >
                    <label for="floatingInput">Nama Mapel</label>
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="button">simpan</button>
                </div>
          
            </form>
            </div>
        </div>
@endsection