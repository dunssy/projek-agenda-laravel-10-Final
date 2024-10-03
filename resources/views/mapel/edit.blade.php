@extends('layout.sidebar')
@section('main')
        <a href="/mapel" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1>Edit Data</h1>
            </div>
            <div class="card-body">
            <form action="{{ url( 'mapel/' . $data->id_mapel )}}" method="POST">
            @method('PUT')
            @csrf
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama"  id="nama"  value="{{$data->mapel}}">
                </div>
              
                <div class="d-grid gap-2 d-md-block pt-3">
                    <button class="btn btn-primary" type="submit" name="save">Update</button>
                </div>
            </form>
            </div>
        </div>

@endsection