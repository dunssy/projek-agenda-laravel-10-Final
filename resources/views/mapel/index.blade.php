@extends('layout.sidebar')
@section('main')
<a href="mapel/create" class="btn btn-primary mb-3"><ion-icon name="add-circle"></ion-icon>Tambah mapel</a>

    <div class="card">
        <div class="card-header">
                <h4 class="card-title text-start">Data mapel</h4>
            </div>
            <div class="card-body shadow">
            <form class="d-flex col-md-4 ml-auto" method="GET" >
                <input class="form-control me-2" type="search" placeholder="Cari Mapel..." name="cari" >
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> 
            <table class="table table-striped table-hover">
            <thead class="table-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Mapel</th>
                        <th>opsi</th>
                    </tr>
                    <hr>
            </thead>
            <tbody>
            
                @php
                $nomor = 1 + ($data->currentPage() - 1) * $data->perPage();
                @endphp
                @foreach ($data as $mapel)
                <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$mapel->mapel}}</td>
                    <td>
                        <a href="{{url('/mapel/' . $mapel->id_mapel.'/edit')}}" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>Edit</a>
                       <a href="#" onclick="confirmDelete({{ $mapel->id_mapel }})" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
              </table>
              {{$data->links()}}
        </div>
    </div>
    {{-- Sweetalert Mapel--}}
    <script>
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
                    window.location.href = '/delete/mapeladmin/' + id;
                }
            })
        }
        </script>
@endsection