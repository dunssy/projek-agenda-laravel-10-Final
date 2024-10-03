@extends('layout.sidebar')
@section('main')
    <div class="card">
        <div class="card-header">
                <h1 class="card-title text-start">Tahun Ajaran</h1>
            </div>
            <div class="card-body shadow">
            <div class="col-md-1 ml-auto">
                <a href="tahun_ajaran/create" class=" btn btn-success btn-sm"><ion-icon name="add-circle"></ion-icon>Tambah</a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <hr>
            </thead>
            <tbody>
            <tr class="table-dark">
                <th>No</th>
                <th>Tahun Ajaran</th>
                <th>opsi</th>
            </tr>
            @php
            $nomor = 1 + ($data->currentPage() - 1) * $data->perPage();
            @endphp
            @foreach ($data as $ajaran)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$ajaran->ajaran}}</td>
                    <td>
                        <a href="{{url('/tahun_ajaran/' . $ajaran->id_ajaran)}}" class="btn btn-secondary btn-sm">Detail</a>
                        <a href="{{url('/tahun_ajaran/' . $ajaran->id_ajaran.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                         <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('tahun_ajaran/' . $ajaran->id_ajaran)}}" method="POST">@csrf @method('DELETE')
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