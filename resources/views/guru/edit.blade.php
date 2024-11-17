@extends('layout.sidebar')
@section('main')
        <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1>Edit Data</h1>
            </div>
            <div class="card-body">
                @if ($errors->any()) 
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $item)    
                        <li>{{$item}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif  
                <form action="{{ url( 'guru/' . $data->id_user )}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" name="namaguru"  id="namaguru"  value="{{$data->name}}">
                        <label for="namaguru">Nama</label>
                    </div>               
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nomorguru" id="floatingInput" value="{{$data->nip}}">
                        <label for="nomorguru">Nip Guru</label>
                    </div>
                    <div class="mb-3">
                        <select name="jkguru" id="jkguru" class="form-control">
                            <option value="{{$data->kelamin}}">Pilih Jenis Kelamin..</option>
                            <option value="pria" {{ ($data->kelamin =='pria') ? 'selected' : '' }}>Pria</option>
                            <option value="wanita" {{ ($data->kelamin =='wanita') ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="alamatguru" id="alamatguru" cols="10" rows="15" class="form-control">{{$data->alamat}}</textarea>
                        <label for="alamatguru">Alamat</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="telponguru" name="telponguru" class="form-control" value="{{$data->telp}}">
                        <label for="telponguru">No Handphone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" id="tempat" name="tempat" class="form-control" value="{{$data->tempat}}">
                        <label for="tempat">Tempat Lahir</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{$data->tgl}}">
                        <label for="tanggal">Tanggal Lahir</label>
                    </div>
                    <div class="mb-3">
                        <select name="agamaguru" id="agamaguru" class="form-control">
                            <option value="{{$data->agama}}" disable>Pilih Agama...</option>
                            <option value="islam" {{ ($data->agama=='islam') ? 'selected' : '' }}>Islam</option>
                            <option value="kristen" {{ ($data->agama=='kristen') ? 'selected' : '' }}>Kristen</option>
                            <option value="katolik" {{ ($data->agama=='katolik') ? 'selected' : '' }}>Katolik</option>
                            <option value="konghucu" {{ ($data->agama=='konghucu') ? 'selected' : '' }}>Konghuvu==cu</option>
                            <option value="hindu" {{ ($data->agama=='hindu') ? 'selected' : '' }}>Islam</option>
                            <option value="budha" {{ ($data->agama=='budha') ? 'selected' : '' }}>Islam</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="username" value="{{$data->username}}">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="emailguru" class="form-control" id="emailguru" value="{{$data->email}}">
                        <label for="emailguru">Email</label>
                    </div>
                    <div class="mb-3">
                        <select name="level" id="level" class="form-control">
                            <option value="{{$data->level}}">Anda Sebagai...</option>
                        <option value="admin" {{ ($data->level=='admin') ? 'selected' : '' }}>Admin</option>
                        <option value="guru" {{ ($data->level=='guru') ? 'selected' : '' }}>Guru</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="passguru" class="form-control" id="password" placeholder="New Password">
                        <label for="passguru">Password</label>
                    </div>
                    @if ($data->foto)
                        <div class="mb-3">
                            <img src="{{asset('foto/'. $data->foto)}}" alt="" width="80" height="50">
                        </div>
                    @endif
                    <div class="mb-3">  
                        <input type="file" name="fotoguru" class="form-control" id="fotoguru" value="{{$data->foto}}">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" name="save">simpan</button>
                    </div>
                </form>
            </div>
        </div>

@endsection