@extends('layout.navbar')
@section('main')
<div class="container mt-5">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/agenda/pengajaran">{{$title}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$halaman}}</li>
      </ol>
          <div class="card shadow">
            <div class="card-header bg-primary">
                <h2 class="text-white">{{$halaman}}</h2>
                <p class="text-white">Jurnal Laporan</p>
            </div>
            <div class="card-body">
                  @if ($errors->any())
                  <div class="alert alert-danger" role="alert">
                      @foreach ($errors->all() as $item)    
                      <ul>
                          <li>{{$item}}</li>
                      </ul>
                      @endforeach
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                   @endif 
                  <!-- Settings Form -->
                  <form action="/agenda/pengajaran" method="POST" enctype="multipart/form-data">     
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="id-g-mapel">Pilih Mapel:</label>
                            <select name="gmapel" id="id-g-mapel" class="form-select mb-3" required>
                                <option value="">Pilih Pelajaran</option>
                                @foreach ($data as $item)
                                    <option value="{{$item->id}}">{{ $item->mapel->mapel}} - {{ $item->kelas->kelas }} - {{$item->jurusan->jurusan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="tglan">Tanggal</label>
                            <input type="date" name="tglan" class="form-control mb-3">
                        </div>
                        <div class="col-md-4">
                            <label for="jam">Jam</label>
                            <input type="time" name="jam" class="form-control mb-3">
                        </div>
                    </div>        
                    <label for="materiagenda">Materi</label>
                    <textarea name="materiagenda" class="form-control mb-3" id="" cols="5" rows="5"></textarea>
                    <label for="absen">Absen</label>
                    <input type="text" name="absensi" class="form-control mb-3">
                    <label for="fileagenda">Upload File</label>
                    <input type="file" name="fileagenda" class="form-control mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangansiswa" class="form-control mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
</div>

@endsection