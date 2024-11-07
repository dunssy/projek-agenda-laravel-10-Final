@extends('layout.navbar')
@section('main')    
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/agenda/mapel" class="btn btn-warning mb-3">Kembali</a>
    <a href="/agenda/mapel/create" class="btn btn-primary">Tambah Mata Pelajaran</a>
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
            <th>Jurusan</th>
            <th>Tingkat</th>
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
              <a href="{{url( agenda/mapel/ . $data->id . /edit)}}" class="btn btn-warning btn-sm">edit</a>
              <a href="" class="btn btn-danger btn-sm">hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  

    <!-- Table -->
  
</div>
@endsection