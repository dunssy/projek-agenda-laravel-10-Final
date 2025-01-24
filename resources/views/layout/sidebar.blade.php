
@extends('layout.main')
@section('konten')    
<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i><ion-icon name="menu"></ion-icon></i>
            </button>
            <div class="sidebar-logo">
                <a href="#">SMKN AGENDA</a>
            </div>
        </div>  
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="/dashboard" class="sidebar-link">
                    <i><ion-icon name="home"></ion-icon></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#datamaster" aria-expanded="false" aria-controls="auth">
                    <i><ion-icon name="settings"></ion-icon></i>
                    <span>Data Master</span>
                </a>
                    <ul id="datamaster" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <a href="/mapel" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="paper"></ion-icon></i> 
                            <span>Kelola Mapel</span>
                        </a>
                        <a href="/jurusan" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="business"></ion-icon></i> 
                            <span>Kelola Jurusan</span>
                        </a>
                        <a href="/kelas" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="bookmark"></ion-icon></i> 
                            <span>Kelola Kelas</span>
                        </a>
                        <a href="/tahun_ajaran" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="school"></ion-icon></i> 
                            <span>Tahun Ajaran</span>
                        </a>
                    </ul>
            </li>
            <li class="sidebar-item">
                <a href="/guru" class="sidebar-link collapsed has-dropdown">
                    <i><ion-icon name="folder-open"></ion-icon></i></i>
                    <span>Manage User</span>
                </a>
            </li>   
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown">
                    <i><ion-icon name="copy"></ion-icon></i></i>
                    <span>File Perangkat</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown">
                    <i><ion-icon name="folder-open"></ion-icon></i></i>
                    <span>Bank Data Agenda</span>
                </a>
            </li>
            {{-- <li class="sidebar-item">
                <a href="{{route('admin.index')}}" class="sidebar-link collapsed has-dropdown">
                    <i><ion-icon name="person-add"></ion-icon></i></i>
                    <span>Manage User</span>
                </a>
            </li> --}}
        </ul>
        <div class="sidebar-footer">
                <a href="https://www.instagram.com/midun_ahmad17/" class="sidebar-link bg-primary">
                    <i><ion-icon name="logo-instagram" width="50%"></ion-icon></i><span>midun_ahmad17</span>
                </a>
        </div>
    </aside>
    <div class="main p-4"  style="max-height: 600px; overflow-y: auto;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Halaman Administrator</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Menambahkan ms-auto agar dropdown berada di kanan -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Foto Profil -->
            
                        <img src="{{ asset('foto/'. Auth::user()->foto)}}" class="rounded-circle me-2" alt="Profile Picture" width="30" height="30">
                      {{Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> <!-- dropdown-menu-end agar dropdown ke kanan -->
                      <li><a class="dropdown-item" href="{{url('settings/' . Auth::user()->id_user .'/edit')}}">Settings</a></li>
                      <li><a class="dropdown-item" href="/settings">Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form onsubmit="return confirm('Yakin keluar akun')" class="d-inline" action="/logout" method="GET">
                            <button class="dropdown-item">Logout</button>
                       </form>
                     </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
        <div class="text-center">
            <div class="content pt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{$title}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$halaman}}</li>
                  </ol>
            </div>
        </div>
        {{-- Tampilkan sebuah pesan jika  --}}
        
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('success')}}</strong> Di Tambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::get('info'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{Session::get('info')}}</strong> Di Ubah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('warning')}}</strong> Berhasil di Hapus
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
       
            @yield('main')
    
    </div>
</div>
@endsection
  
