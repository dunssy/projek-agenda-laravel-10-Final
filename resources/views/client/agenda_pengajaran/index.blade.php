@extends('layout.navbar')
@section('main')    
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/agenda/guru" class="btn btn-warning mb-3">Kembali</a>

  </div>
  <div class="card">
    <div class="card-header">
      <!-- Header -->
        <h3 class="card-title">Agenda Pengajaran  </h3>
      <!-- Back Button -->
     
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Agenda</th>
          </tr>
        </thead>
        @foreach ($data as $item)
        <tbody>
        <td>{{$loop->iteration}}</td> 
        <td>{{$item->mapel->mapel}}</td>
        <td>{{$item->kelas->kelas}}</td>
        <td>{{$item->jurusan->jurusan}}</td>
        <td>
          <a href="{{url('agenda/pengajaran/'. $item->id)}}" class="btn btn-primary">View</a>
        </td>
      </tbody>
      @endforeach
      </table>
    </div>
  </div>
  

    <!-- Table -->
  
</div>
@endsection