@extends('layout.sidebar')
@section('main')
        <a href="/jurusan" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h4>Edit Data</h4>
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
            <form action="{{ url( 'jurusan/' . $data->id_jurusan )}}" method="POST">
            @method('PUT')
            @csrf
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control col-4" name="nama"  id="nama"  value="{{$data->jurusan}}">
                </div>
              
                <div class="d-grid gap-2 d-md-block pt-3">
                    <button class="btn btn-primary" type="submit" name="save">Update</button>
                </div>
            </form>
            </div>
        </div>

@endsection