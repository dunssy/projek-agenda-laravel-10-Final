@extends('layout.navbar')
@section('main')  
<div class="container mt-4 px-3" >
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
                <th>Anda Mengajar</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Laporan</th>
              </tr>
            </thead>     
            <tbody>
              @foreach ($data as $data)
              <tr>
                <td>{{$data->mapel->mapel }}</td>
                <td>{{$data->kelas->kelas }}</td>
                <td>{{$data->jurusan->jurusan }}</td>
                <td>
                  <a href="{{url('laporan/agenda/' . $data->id)}}" class="btn btn-secondary">Print</a></td>
              </tr>
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
              <a href="{{url('/agenda/pengajaran/create')}}" class="btn btn-primary">Tambah Jurnal Agenda</a>
           
            </div>
            <table class="table table-bordered table-hover">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Mapel</th>
                  <th>Jam</th>
                  <th>Materi</th>
                  <th>Absen</th>
                  <th>Keterangan</th>
                  <th>opsi</th>
                </tr>
              </thead>
            
              @foreach ($agenda as $item)
              <tbody>
                <td>{{$loop->iteration}}</td>
                 <td>{{$item->tgl}}</td>
                 <td>{{$item->g_mapel->mapel->mapel}}</td>
                 <td>{{$item->jam}}</td>
                 <td>{{$item->materi}}</td>
                 <td>{{$item->absen}}</td>
                 <td>{{$item->keterangan}}</td>
                 <td><a href="{{url('agenda/pengajaran/'.$item->id.'/edit ')}}" class="btn btn-warning mb-4">Edit</a>
                  <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('agenda/pengajaran/' . $item->id)}}" method="POST">@csrf @method('DELETE')
                    <button class="btn btn-danger mb-4">Hapus</button>
                    </form>
                  <a href="{{asset('dokumen/'. $item->file)}}" class="btn btn-success mb-4">Lihat Materi</a></td>
                </tbody>
                @endforeach
              </table>
              {{$agenda->links()}}
        </div>
      </div>
    </div>
</div>  
@endsection
