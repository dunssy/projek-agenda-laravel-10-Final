@extends('layout.navbar')
@section('main')
    <div class="container mt-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/agenda/mapel">{{$title}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$halaman}}</li>
          </ol>
        <div class="card">
          <div class="card-header">
            <!-- Header -->
              <h3 class="card-title pt-5">Tambah Mata Pelajaran</h3>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatibus facilis quidem ex sapiente eos, quaerat veniam corporis voluptas totam quos deserunt fugit!</p>
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
           <div class="form-floating">
            {{-- Mapel --}}
             <select name="mapel" id="mapel" class="form-control mb-3">
               <option value="">Pilih Mapel...</option>
               @foreach ($mapel as $mapel)
               <option value="{{$mapel->id_mapel}}">{{$mapel->mapel}}</option>
               @endforeach
              </select>
              <label for="mapel">Mata Pelajaran</label>
              {{-- end Mapel --}}
          </div>
           <div class="form-floating">
            {{-- Kelas --}}
            <select name="kelas" id="kelas" class="form-control mb-3">
              <option value="">Pilih Kelas...</option>
              @foreach ($kelas as $kelas)
              <option value="{{$kelas->id_kelas}}">{{$kelas->kelas}}</option>
              @endforeach
          </select>
          <label for="kelas">Kelas</label>
        {{-- end Kelas --}}
          </div>
           <div class="form-floating">
              {{-- Jurusan --}}
              <select name="jurusan" id="jurusan" class="form-control mb-3">
                <option value="">Pilih Jurusan...</option>
                @foreach ($jurusan as $jurusan)
                <option value="{{$jurusan->id_jurusan}}">{{$jurusan->jurusan}}</option>
                @endforeach
            </select>
            <label for="jurusan">Jurusan</label>
            {{-- End Jurusan --}}
          </div>
           
    
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="save">Simpan</button>
        </div>
          </form>
          </div>
        </div>
@endsection