@extends('layout.sidebar')
@section('main')
        <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1>Edit Data</h1>
            </div>
            <div class="card-body">
            <form action="{{ url( 'guru/' . $data->nip )}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="mb-3">
                   <label for="nomorguru">Nip</label>
                   <input type="text" name="nomorguru" class="form-control" value="{{$data->nip}}">
                </div>
                <div class="mb-2">
                    <label for="namaguru">Nama</label>
                    <input type="text" class="form-control" name="namaguru"  id="namaguru"  value="{{$data->nama}}">
                </div>
                <div class="mb-3">
                    <label for="alamatguru" class="form-label">Jenis Kelamin</label>
                    <select name="jkguru" id="jkguru" class="form-control">
                        <option value="">{{$data->jenis_kelamin}}</option>
                        <option value="pria" {{ ($data->jenis_kelamin=='pria') ? 'selected' : '' }}>Pria</option>
                        <option value="wanita" {{ ($data->jenis_kelamin=='wanita') ? 'selected' : '' }}>Wanita</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama">Agama</label>
                    <input type="text" name="agamaguru" class="form-control" value="{{$data->agama}}">
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="{{$data->username}}">
                </div>
                <div class="mb-3">
                    <label for="emailguru">Email</label>
                    <input type="text" name="emailguru" class="form-control" value="{{$data->email}}">
                </div>
                <div class="mb-3">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="">{{$data->level}}</option>
                        <option value="admin" {{ ($data->level =='admin') ? 'selected' : '' }}>Admin</option>
                        <option value="guru"{{ ($data->level == 'guru') ? 'selected' : '' }}>Guru</option> 
                    </select>
                </div>
                  @if ($data->foto)
                  <div class="mb-3">
                    <img src="{{asset('foto/'. $data->foto)}}" alt="" width="80" height="50">
                  </div>
                  @endif
                  <div class="mb-3">  
                    <label for="fotoguru" class="form-label">foto</label>
                    <input type="file" name="fotoguru" class="form-control" id="fotoguru" value="{{Session::get('fotoguru')}}">
                  </div>
                  <div class="mb-3">
                    <label for="passguru">Password</label>
                    <input type="password" name="passguru" class="form-control">
                </div>
                <div class="d-grid gap-2 d-md-block pt-3">
                    <button class="btn btn-primary" type="submit" name="save">Update</button>
                </div>
            </form>
            </div>
        </div>

@endsection