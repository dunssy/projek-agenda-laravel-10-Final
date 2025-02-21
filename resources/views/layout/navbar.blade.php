@extends('layout.main')
@section('konten')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/logosmkncompreng.png')}}" alt="ini foto" width="50" height="40"> <strong>Agenda Guru Smkn</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav active ms-auto"> <!-- Menambahkan ms-auto agar dropdown berada di kanan -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard/guru">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/agenda/mapel">Mata Pelajaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/agenda/pengajaran">Agenda Pengajaran</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Menambahkan ms-auto agar dropdown berada di kanan -->
      <ul class="navbar-nav ms-auto"> 
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <!-- Foto Profil -->
           
            <img  class="rounded-circle bg-primary" src="{{ asset('foto/'. Auth::user()->foto) }}" alt="foto" width="40" height="40" border="1px">

            <b> {{Auth::user()->username}} </b>
          </a>
          <!-- dropdown-menu-end agar dropdown ke kanan -->
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
            <li><a class="dropdown-item" href="{{ url('setings/guru/' . Auth::user()->id_user .'/edit')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
              <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
            </svg> Settings</a></li>
            <li><a class="dropdown-item" href="/setings/guru"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg> Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li> 
              <a href="#" onclick="confirmLogout()" class="dropdown-item"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
              </svg> Logout</a>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{--Sweet Logout Guru--}}
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
@yield('main')
@endsection