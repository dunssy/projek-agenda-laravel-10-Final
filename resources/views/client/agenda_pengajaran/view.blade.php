@extends('layout.navbar')
@section('main')  
<div class="container mt-4 px-3" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">{{$halaman}}</li>
    <li class="breadcrumb-item"><a href="/agenda/pengajaran">{{$title}}</a></li>
  </ol>
  <div class="row mb-3">

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
                  <a href="{{url('laporan/agenda/' . $data->id)}}" class="btn btn-secondary"><ion-icon name="print"></ion-icon>Print</a></td>
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
              <a href="{{url('/agenda/pengajaran/create')}}" class="btn btn-primary"><ion-icon name="add"></ion-icon>Tambah Jurnal Agenda</a>
           
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
                 <td><a href="{{url('agenda/pengajaran/'.$item->id.'/edit ')}}" class="btn btn-warning"><ion-icon name="open"></ion-icon></a>
                  <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('agenda/pengajaran/' . $item->id)}}" method="POST">@csrf @method('DELETE')
                    <button class="btn btn-danger"><ion-icon name="trash"></ion-icon></button>
                    </form>
                  <a href="{{asset('dokumen/'. $item->file)}}" class="btn btn-success"><ion-icon name="document"></ion-icon></a></td>
                </tbody>
                @endforeach
              </table>
              {{$agenda->links()}}
        </div>
      </div>
</div>  
@endsection
