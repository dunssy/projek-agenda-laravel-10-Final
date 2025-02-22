
@extends('layout.main')
@section('konten')    
<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i><ion-icon name="menu"></ion-icon></i>
            </button>
            <div class="sidebar-logo pt-4">
                <a href="#">AGENDA SKMN COMPRENG</a>
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
                        <a href="/mapel" class="sidebar-link">
                            <i><ion-icon name="paper"></ion-icon></i> 
                            <span>Kelola Mapel</span>
                        </a>
            </li>
            <li class="sidebar-item">
                        <a href="/jurusan" class="sidebar-link">
                            <i><ion-icon name="business"></ion-icon></i> 
                            <span>Kelola Jurusan</span>
                        </a>
            </li>
            <li class="sidebar-item">
                        <a href="/kelas" class="sidebar-link">
                            <i><ion-icon name="bookmark"></ion-icon></i> 
                            <span>Kelola Kelas</span>
                        </a>
            </li>
            <li class="sidebar-item">
                        <a href="/tahun_ajaran" class="sidebar-link ">
                            <i><ion-icon name="school"></ion-icon></i> 
                            <span>Tahun Ajaran</span>
                        </a>
            </li>
           
            <li class="sidebar-item">
                <a href="/guru" class="sidebar-link collapsed has-dropdown">
                    <i><ion-icon name="folder-open"></ion-icon></i></i>
                    <span>Manage Guru</span>
                </a>
            </li>
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
              <a class="navbar-brand" href="{{url('dashboard')}}">Halaman Administrator</a>
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
                      <li><a class="dropdown-item" href="{{url('settings/' . Auth::user()->id_user .'/edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                          </svg> settings</a></li>
                      <li><a class="dropdown-item" href="/settings"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg> Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a href="#" onclick="confirmLogout()" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg> Logout</a>
                     </li>
                    </ul>
                  </li>
                    {{--Sweet Logout Admin--}}
                    <script>
                      function confirmLogout() {
                          Swal.fire({
                              title: 'Apakah Anda yakin?',
                              icon: 'info',
                              text: "Anda akan keluar dari halaman ini!",
                              showCancelButton: true,
                              confirmButtonColor: '#3BB143',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Ya, keluar!'
                          }).then((result) => {
                              if (result.isConfirmed) {
                                  window.location.href = '/logout';
                              }
                          })
                      }
                    </script>
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
            @yield('main')
            @include('layout.footer')
    </div>
</div>


@endsection
  
