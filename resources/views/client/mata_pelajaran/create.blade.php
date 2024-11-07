@extends('layout.navbar')
@section('main')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <a href="/agenda/mapel" class="btn btn-warning mb-3">Kembali</a>
        </div>
        <div class="card">
          <div class="card-header">
            <!-- Header -->
              <h3 class="card-title">Tambah Mata Pelajaran</h3>
            <!-- Back Button -->
           
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
          <form action="/agenda/mapel" method="POST">
           @csrf
           <div class="form-floating mb-3">
                <select name="mapel" id="mapel" class="form-control">
                    <option value="">Pilih Mapel...</option>
                    @foreach ($mapel as $mapel)
                    <option value="{{$mapel->id_mapel}}">{{$mapel->mapel}}</option>
                    @endforeach
                </select>
                <select name="kelas" id="kelas" class="form-control">
                    <option value="">Pilih Kelas...</option>
                    @foreach ($kelas as $kelas)
                    <option value="{{$kelas->id_kelas}}">{{$kelas->kelas}}</option>
                    @endforeach
                </select>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option value="">Pilih Jurusan...</option>
                    @foreach ($jurusan as $jurusan)
                    <option value="{{$jurusan->id_jurusan}}">{{$jurusan->jurusan}}</option>
                    @endforeach
                </select>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="save">Simpan</button>
        </div>
          </form>
          </div>
        </div>
@endsection