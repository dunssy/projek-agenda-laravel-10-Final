@extends('layout.navbar')
@section('main')    
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/agenda/guru" class="btn btn-warning mb-3">Kembali</a>
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
              <a href="{{url('agenda/mapel/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">edit</a>
              <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('agenda/mapel/' . $item->id)}}" method="POST">@csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
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