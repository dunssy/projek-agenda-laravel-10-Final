@extends('layout.navbar')
@section('main')
<div class="container mt-5">
    <div class="row">
        <!-- Profile Sidebar -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <img src="{{ asset('foto/'. Auth::user()->foto)}}" alt="Profile Picture" class="rounded-circle mb-3" width="150" style="border-color:red; ">
                    <h4>{{Auth::user()->username}}</h4>
                    <div class="mb-2">
                        <strong>Nama</strong>
                        <p>{{Auth::user()->name}}</p>
                    </div>
                    <div class="mb-2">
                        <strong>Telephone</strong>
                        <p>{{Auth::user()->telp}}</p>
                    </div>
                    <div class="mb-2">
                        <strong>Email</strong>
                        <p>{{Auth::user()->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Profile Content -->
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary">
                </div>
                <div class="card-body">
                    <!-- Tabs for Activity, Timeline, Settings -->
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link active{{ Route::is('seting/guru') ? 'active' : '' }}" href="{{ url('settings/guru')}}">My Acount</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ Route::is('setings/guru') ? 'active' : '' }}" href="{{ url('setings/guru/' . Auth::user()->id_user .'/edit')}}">Settings</a>
                        </li>
                    </ul>

                    <!-- Settings Form -->
                    <form>
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="{{Auth::user()->username}}" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="{{Auth::user()->email}}" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="experience" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="experience" rows="3" placeholder="{{Auth::user()->alamat}}" disabled></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="skills" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="skills" rows="2" placeholder="{{Auth::user()->tempat}}" disabled></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">No Telephone</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="{{Auth::user()->telp}}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection