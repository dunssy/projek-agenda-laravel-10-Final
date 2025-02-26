@extends('layout.sidebar')
@section('main')
<a href="/guru/create" class=" btn btn-primary btn-sm mb-3"><ion-icon name="person-add"></ion-icon>Tambah Guru</a>      
<div class="card">
    <div class="card-header">
        <h4 class="card-title text-start">Data Guru</h4>
    </div>
    <div class="card-body shadow">
    <form class="d-flex mb-3 col-md-3 ml-auto" method="GET" >
        <input class="form-control me-2" type="search" placeholder="Cari Guru..." name="cari" autofocus >
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form> 
    {{-- form Selected Delete --}}
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table bg-light sm-auto">
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Nip</th>
                        <th class="text-center">Alamat</th>
                        <th>Kelamin</th>
                        <th>Agama</th> 
                        <th>Kota</th>
                        <th>Tanggal</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Level</th>
                        <th>Opsi</th>
                        <th></th>
                    </tr></tr>
                </thead>
                <tbody>
                    @php
                        $no = $nomor = 1 + ($data->currentPage() - 1) * $data->perPage(); ;
                    @endphp
                    @foreach ($data as $guru)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>
                        @if ($guru->foto)
                            <img  class="rounded-circle shadow" src="{{ asset('foto/'. $guru->foto) }}" alt="foto" width="50" height="50">
                        @endif</td>
                        <td>{{$guru->username}}</td>
                        <td>{{$guru->nip}}</td>
                        <td >{{$guru->alamat}}</td>
                        <td>{{$guru->kelamin}}</td>
                        <td>{{$guru->agama}}</td>
                        <td>{{$guru->tempat}}</td>
                        <td>{{$guru->tgl}}</td>
                        <td>{{$guru->name}}</td>
                        <td>{{$guru->email}}</td>
                        <td>{{$guru->telp}}</td>
                        <td>{{$guru->level}}</td>
                        <td>
                            <a href="{{url('/guru/' . $guru->id_user.'/edit')}}" class="btn btn-warning btn-sm mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>Edit</a>
                            <a href="#"  onclick="confirmDelete({{ $guru->id_user }})" class="btn btn-danger btn-sm mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                            </svg>Hapus</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
              {{$data->links()}}
        </div>
    </div>
    
    {{--Sweet Alert Guru--}}
    <script>
    // Delete Button with Sweet Alert
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/delete/guru/' + id;
                }
            })
        }


        </script>

@endsection