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
                  <form action="{{url('agenda/pengajaran/' . $agenda->id )}}" method="POST" >    
                    @method('PUT') 
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <select name="gmapel" id="id-g-mapel" class="form-select " required>
                                    <option value="{{$agenda->id_g_mapel}}" disable>{{$agenda->g_mapel->mapel->mapel}}-{{$agenda->g_mapel->kelas->kelas}}-{{$agenda->g_mapel->jurusan->jurusan}}</option>
                                    @foreach ($data as $item)
                                        <option value="{{$item->id}}">{{ $item->mapel->mapel}} - {{ $item->kelas->kelas }} - {{$item->jurusan->jurusan}}</option>
                                    @endforeach
                                </select>
                                <label for="id-g-mapel">Pilih Mapel</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="date" name="tglan" class="form-control mb-3" value="{{$agenda->tgl}}">
                                <label for="tglan">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="time" name="jam" class="form-control" value="{{$agenda->jam}}">
                                <label for="jam">Jam</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                            </div>
                        </div>
                    </div>        
                   
                

                  
                    <label for="materiagenda">Materi</label>
                    <textarea name="materiagenda" class="form-control mb-3" id="" cols="5" rows="5">{{$agenda->materi}}</textarea>
                    <label for="absen">Absen</label>
                    <input type="text" name="absensi" class="form-control mb-3" value="{{$agenda->absen}}">
                    <label for="fileagenda">Upload File</label>
                    <input type="file" name="fileagenda" class="form-control mb-3" value="{{$agenda->file}}">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangansiswa" class="form-control mb-3" value="{{$agenda->keterangan}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
</div>

@endsection