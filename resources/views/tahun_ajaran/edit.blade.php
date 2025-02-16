@extends('layout.sidebar')
@section('main')
        <a href="/tahun_ajaran" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1>Edit Data</h1>
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
            <form action="{{ url( 'tahun_ajaran/' . $data->id_ajaran )}}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="nama"  id="nama"  value="{{$data->ajaran}}">
                        <label for="">Nama</label>
                    </div>
                    <div class="form-floating">
                        <select name="status" class="form-select" id="status">
                            <option value="{{$data->status}}">Pilih...</option>    
                            <option value="Y" {{ ($data->status =='Y') ? 'selected' : '' }}>Aktif</option>
                            <option value="T" {{ ($data->status =='T') ? 'selected' : '' }}>Non Aktif</option>
                        </select>
                        <label for="status">Status</label>
                    </div>
                </div>
            </div>
                
                <div class="d-grid gap-2 d-md-block pt-3">
                    <button class="btn btn-primary" type="submit" name="save">Update</button>
                </div>
            </form>
            </div>
        </div>

@endsection