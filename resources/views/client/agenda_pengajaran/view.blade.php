@extends('layout.navbar')
@section('main')  
<div class="container mt-4 px-3">
  <div class="row mb-3">
    <div class="col">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="text-title">Mata Pelajaran</h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead class="table-light">
              <tr>
                <th>Mata Pelajaran</th>
                <th>Jurusan</th>
                <th>Kelas</th>
              </tr>
            </thead>     
            <tbody>    
            @foreach ($data as $item)       
              <td>{{$item->id_mapel}}<span>{{$mapel-mapel}}</span></td>
              <td>{{$item->id_kelas}}</td>
              <td>{{$item->id_jurusan}}</td>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="text-title">Penambahan Jurnal Ajaran</h5>
          <p class="text-success">Jurnal Pengajaran<p/>
        </div>
           <div class="card-body">
            <div class="mb-3 p-3">
              <a href="" class="btn btn-primary">Tambah Jurnal Agenda</a>
              <a href="" class="btn btn-success">Export Excel</a>
              <a href="" class="btn btn-danger">Print</a>
            </div>
            <table class="table table-bordered table-hover">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Materi</th>
                  <th>Absen</th>
                  <th>Keterangan</th>
                  <th>opsi</th>
                </tr>
              </thead>
             
              <tbody>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-primary">hapus</a>
              </td>
            </tbody>
        
            </table>
        </div>
      </div>
    </div>
</div>  
@endsection
