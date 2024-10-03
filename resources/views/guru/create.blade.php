@extends('layout.sidebar')
@section('main')
    <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h1 class="card-title text-start">Tambah Guru</h1>
            </div>
            <div class="card-body">
            <form action="/guru" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nomorguru" id="floatingInput" value="{{Session::get('nomorguru')}}">
                    <label for="floatingInput">Nip Guru</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="namaguru"  id="namaguru"  value="">
                    <label for="namaguru">Nama</label>
                </div>
                <div class="mb-3">
                    <select name="jkguru" id="jkguru" class="form-control">
                        <option value="">Pilih Jenis Kelamin..</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="agamaguru" class="form-control" id="agamaguru">
                    <label for="agamaguru">Agama</label>
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