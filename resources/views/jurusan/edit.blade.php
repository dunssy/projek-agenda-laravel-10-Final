@extends('layout.sidebar')
@section('main')
        <a href="/jurusan" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1>Edit Data</h1>
            </div>
            <div class="card-body">
            <form action="{{ url( 'jurusan/' . $data->id_jurusan )}}" method="POST">
            @method('PUT')
            @csrf
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama"  id="nama"  value="{{$data->jurusan}}">
                </div>
              
                <div class="d-grid gap-2 d-md-block pt-3">
                    <button class="btn btn-primary" type="submit" name="save">Update</button>
                </div>
            </form>
            </div>
        </div>

@endsection