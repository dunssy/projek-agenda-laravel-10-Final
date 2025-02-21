@extends('layout.navbar')
@section('main')    
<div class="container mt-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">{{$halaman}}</li>
    <li class="breadcrumb-item"><a href="/agenda/mapel">{{$title}}</a></li>
  </ol>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/agenda/mapel/create" class="btn btn-primary"><ion-icon name="add"></ion-icon>Tambah Mata Pelajaran</a>
  </div>
  <div class="card">
    <div class="card-header">
      <!-- Header -->
        <h3 class="card-title">Mata Pelajaran</h3>
      <!-- Back Button -->
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Tingkat</th>
            <th>Jurusan</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
          <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$item->mapel->mapel}}</td>
           <td>{{$item->kelas->kelas}}</td>
           <td>{{$item->jurusan->jurusan}}</td>
           <td>
              <a href="{{url('agenda/mapel/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm text-white"><ion-icon name="open"></ion-icon>Edit</a>
              <a href="#" onclick="confirmDelete('{{$item->id}}')" class="btn btn-danger btn-sm"><ion-icon name="trash"></ion-icon>Hapus</a>
              {{-- <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('agenda/mapel/' . $item->id)}}" method="POST">@csrf @method('DELETE')
                <button class="btn btn-danger btn-sm"></button>
                </form> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <!-- Tabel -->
    </div>
  </div>
        {{--SweetAlert mapel Guru--}}
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
                    window.location.href = '/delete/mapel/' + id;
                }
            })
        }
        </script>
</div>
@endsection