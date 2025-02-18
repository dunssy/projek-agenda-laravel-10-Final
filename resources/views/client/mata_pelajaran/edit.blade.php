@extends('layout.navbar')
@section('main')
    <div class="container mt-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/agenda/mapel">{{$title}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$halaman}}</li>
      </ol>
        <div class="card">
          <div class="card-header">
              <h3 class="card-title">Edit Mata Pelajaran</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius iure inventore error.</p>
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
          <form action="{{url('agenda/mapel/'. $data->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-floating mb-3">
                  <select name="mapel" id="mapel" class="form-control">
                      <option value="">{{$data->mapel->mapel}}</option>
                      @foreach ($mapel as $mapel)
                      <option value="{{$mapel->id_mapel}}">{{$mapel->mapel}}</option>
                      @endforeach
                  </select>
                  <label for="mapel">Mata Pelajaran</label>
            </div>
            <div class="form-floating mb-2">
              <select name="kelas" id="kelas" class="form-control">
                <option value="" disabled>{{$data->kelas->kelas}}</option>
                @foreach ($kelas as $kelas)
                <option value="{{$kelas->id_kelas}}">{{$kelas->kelas}}</option>
                @endforeach
               </select>
               <label for="kelas">Kelas</label>
            </div>
            <div class="form-floating mb-2">
              <select name="jurusan" id="jurusan" class="form-control">
                <option value="" disabled>{{$data->jurusan->jurusan}}</option>
                @foreach ($jurusan as $jurusan)
                <option value="{{$jurusan->id_jurusan}}">{{$jurusan->jurusan}}</option>
                @endforeach
              </select>
              <label for="jurusan">Jurusan</label>
          </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit" name="save">Simpan</button>
            </div>
          </form>
          </div>
        </div>
@endsection