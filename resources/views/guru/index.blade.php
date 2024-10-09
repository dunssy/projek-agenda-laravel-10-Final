@extends('layout.sidebar')
@section('main')
<div class="card">
    <div class="card-header">
        <h1 class="card-title text-start">Data Guru</h1>
    </div>
    <div class="card-body shadow">
    </form>
    <div class="col-md-1 ml-auto mb-2">
        <a href="/guru/create" class=" btn btn-success btn-sm"><ion-icon name="person-add"></ion-icon>Tambah Guru</a>      
    </div>
    <form class="d-flex" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form> 
            <table class="table table-striped table-hover">
                <thead>
                    <hr>
            </thead>
            <tbody>
                
                <tr class="table-dark">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th> 
                    <th>Username</th>
                    <th>tempat</th>
                    <th>tanggal</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Level</th>
                    <th>opsi</th>
                </tr>
                @php
                    $no = $nomor = 1 + ($data->currentPage() - 1) * $data->perPage(); ;
                @endphp
                @foreach ($data as $guru)
                <tr>
                    <td>{{$no++}}</td>
                    <td>
                    @if ($guru->foto)
                        <img  class="rounded-circle bg-primary" src="{{ asset('foto/'. $guru->foto) }}" alt="foto" width="50" height="50">
                    @endif</td>
                    <td>{{$guru->name}}</td>
                    <td>{{$guru->nip}}</td>
                    <td></td>
                    <td>{{$guru->jenis_kelamin}}</td>
                    <td>{{$guru->agama}}</td>
                    <td>{{$guru->username}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$guru->email}}</td>
                    <td></td>
                    <td>{{$guru->level}}</td>
                    <td>
                        <a href="{{url('/guru/' . $guru->nip)}}" class="btn btn-secondary btn-sm">Detail</a>
                        <a href="{{url('/guru/' . $guru->nip.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                         <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('guru/' . $guru->nip)}}" method="POST">@csrf @method('DELETE')
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