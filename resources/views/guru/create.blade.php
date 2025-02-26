@extends('layout.sidebar')
@section('main')
    <a href="/guru" class="btn btn-primary mb-3">Kembali</a>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title text-start">Tambah Guru</h4>
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
             <div class="row">
                <div class="col-md-4">
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" name="namaguru"  id="namaguru"  value="{{Session::get('namaguru')}}">
                        <label for="namaguru">Nama</label>
                    </div> 
                 </div>
                <div class="col-md-4">              
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nomorguru" id="floatingInput" value="{{Session::get('nomorguru')}}">
                        <label for="nomorguru">Nip Guru</label>
                    </div>
                 </div>
                <div class="col-md-4">           
                    <div class="form-floating mb-3">
                        <select name="jkguru" id="jkguru" class="form-select">
                            <option value="">Pilih Jenis Kelamin..</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        <label for="jkguru">Jenis Kelamin</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <textarea name="alamatguru" id="alamatguru" cols="10" rows="15" class="form-control">{{Session::get('alamat')}}</textarea>
                        <label for="alamatguru">Alamat</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" id="telponguru" name="telponguru" class="form-control" value="{{Session::get('telp')}}">
                        <label for="telponguru">No Handphone</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input name="tempat" class="form-control">
                        <label for="tempat">Tempat Lahir</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{Session::get('tgl')}}">
                        <label for="tanggal">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select name="agamaguru" id="agamaguru" class="form-select">
                            <option value="" disable>Pilih Agama...</option>
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                            <option value="katolik">katolik</option>
                            <option value="hindu">hindu</option>
                        </select>
                        <label for="agama">Agama</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="username" value="{{Session::get('username')}}">
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="email" name="emailguru" class="form-control" id="emailguru" value="{{Session::get('email')}}">
                        <label for="emailguru">Email</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select name="level" id="level" class="form-select">
                            <option value="">Anda Sebagai...</option>
                            <option value="admin">Admin</option>
                            <option value="guru">Guru</option>
                        </select>
                        <label for="level">Level</label>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="mb-3">
                        <input type="radio" value="Bola" name="hobis"/>BOLA
                         <input type="radio" value="Futsal" name="hobis"/> FUTSAL
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="password" name="passguru" class="form-control" id="password">
                        <label for="passguru">Password</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">  
                        <input type="file" name="fotoguru" class="form-control" id="fotoguru" value="{{Session::get('fotoguru')}}">
                      </div>
                </div>
                <div class="d-grid gap-2  d-md-block pt-3">
                       <button class="btn btn-primary" type="submit" name="save">simpan</button>
                </div>
             </div>
     
            </form>
            </div>
        </div>
 
@endsection