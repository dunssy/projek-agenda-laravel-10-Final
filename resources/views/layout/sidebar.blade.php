
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
                <a href="dashboard" class="sidebar-link">
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
                        <a href="{{route('mapel.index')}}" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="paper"></ion-icon></i> 
                            <span>Kelola Mapel</span>
                        </a>
                        <a href="{{route('jurusan.index')}}" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="business"></ion-icon></i> 
                            <span>Kelola Jurusan</span>
                        </a>
                        <a href="{{route('kelas.index')}}" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="bookmark"></ion-icon></i> 
                            <span>Kelola Kelas</span>
                        </a>
                        <a href="{{route('tahun_ajaran.index')}}" class="sidebar-link collapsed has-dropdown">
                            <i><ion-icon name="school"></ion-icon></i> 
                            <span>Tahun Ajaran</span>
                        </a>
                    </ul>
            </li>
            <li class="sidebar-item">
                <a href="{{route('guru.index')}}" class="sidebar-link collapsed has-dropdown">
                    <i><ion-icon name="folder-open"></ion-icon></i></i>
                    <span>Manage Guru</span>
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
                <a href="#" class="sidebar-link bg-danger">
                    <i><ion-icon name="exit" width="50%"></ion-icon></i><span>Logout</span>
                </a>
        </div>
    </aside>
    <div class="main p-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown-end">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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
  
