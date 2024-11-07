@extends('layout.sidebar')
@section('main')
    <div class="card">
        <div class="card-header">
                <h1 class="card-title text-start">Data mapel</h1>
            </div>
            <div class="card-body shadow">
            <div class="col-md-1 ml-auto mb-3">
                <a href="mapel/create" class=" btn btn-success btn-sm"><ion-icon name="add-circle"></ion-icon>Tambah mapel</a>
            </div>
            <form class="d-flex" method="GET" >
                <input class="form-control me-2" type="search" placeholder="Cari Data Mapel..." name="cari" autofocus >
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> 
            <table class="table table-striped table-hover">
                <thead>
                    <hr>
            </thead>
            <tbody>
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>opsi</th>
                </tr>
                @php
                $nomor = 1 + ($data->currentPage() - 1) * $data->perPage();
                @endphp
                @foreach ($data as $mapel)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$mapel->mapel}}</td>
                    <td>
                        <a href="{{url('/mapel/' . $mapel->id_mapel)}}" class="btn btn-secondary btn-sm">Detail</a>
                        <a href="{{url('/mapel/' . $mapel->id_mapel.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                         <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('mapel/' . $mapel->id_mapel)}}" method="POST">@csrf @method('DELETE')
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