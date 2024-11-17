@extends('layout.sidebar')
@section('main')
<div class="card">
    <div class="card-header">
        <h1 class="card-title text-start">Data jurusan</h1>
    </div>
    <div class="card-body shadow">
        <div class="col-md-1 ml-auto mb-3">
            <a href="jurusan/create" class=" btn btn-success btn-sm"><ion-icon name="add-circle"></ion-icon>Tambah jurusan</a>
        </div>
        <form class="d-flex" method="GET" >
            <input class="form-control me-2" type="search" placeholder="Cari Data User..." name="cari" autofocus >
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
            <table class="table table-striped table-hover">
                <thead>
                    <hr>
                </thead>
                <tbody>
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nama jurusan</th>
                    <th>opsi</th>
                </tr>
                @php
                $nomor = 1 + ($data->currentPage() - 1) * $data->perPage();
                @endphp
                @foreach ($data as $jurusan)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$jurusan->jurusan}}</td>
                    <td>
                        
                        <a href="{{url('/jurusan/' . $jurusan->id_jurusan.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                         <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('jurusan/' . $jurusan->id_jurusan)}}" method="POST">@csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
              </table>
              {{$data->links()}}
        </div>
    </div>
@endsection