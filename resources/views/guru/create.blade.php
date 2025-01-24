@extends('layout.sidebar')
@section('main')
    <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1 class="card-title text-start">Tambah Guru</h1>
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
            <form action="/guru" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control" name="namaguru"  id="namaguru"  value="">
                    <label for="namaguru">Nama</label>
                </div>               
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nomorguru" id="floatingInput" value="{{Session::get('nomorguru')}}">
                    <label for="nomorguru">Nip Guru</label>
                </div>
                <div class="mb-3">
                    <select name="jkguru" id="jkguru" class="form-control">
                        <option value="">Pilih Jenis Kelamin..</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="alamatguru" id="alamatguru" cols="10" rows="15" class="form-control"></textarea>
                    <label for="alamatguru">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="telponguru" name="telponguru" class="form-control">
                    <label for="telponguru">No Handphone</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="tempat" name="tempat" class="form-control">
                    <label for="tempat">Tempat Lahir</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                    <label for="tanggal">Tanggal Lahir</label>
                </div>
                <div class="mb-3">
                    <select name="agamaguru" id="agamaguru" class="form-control">
                        <option value="" disable>Pilih Agama...</option>
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katolik">katolik</option>
                        <option value="hindu">hindu</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="emailguru" class="form-control" id="emailguru">
                    <label for="emailguru">Email</label>
                </div>
                <div class="mb-3">
                    <select name="level" id="level" class="form-control">
                        <option value="">Anda Sebagai...</option>
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="radio" value="Bola" name="hobis"/>BOLA
                     <input type="radio" value="Futsal" name="hobis"/> FUTSAL
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="passguru" class="form-control" id="password">
                    <label for="passguru">Password</label>
                </div>
                <div class="mb-3">  
                    <input type="file" name="fotoguru" class="form-control" id="fotoguru" value="{{Session::get('fotoguru')}}">
                  </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" name="save">simpan</button>
                </div>
            </form>
            </div>
        </div>
 
@endsection