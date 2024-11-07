@extends('layout.sidebar')
@section('main')
<div class="container mt-5">
  <div class="row">
      <!-- Profile Sidebar -->
      <div class="col-md-4">
          <div class="card">
              <div class="card-body text-center">
                  <img src="{{ asset('foto/'. Auth::user()->foto)}}" alt="Profile Picture" class="rounded-circle mb-3" width="150" >
                  <h4>{{Auth::user()->username}}</h4>
                  <p class="text-muted">{{Auth::user()->level}}</p>
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
                  <a href="" class="btn btn-primary">Follow</a> 
              </div>
          </div>
          <div class="card mt-3">
              <div class="card-body">
                  <h5>About Me</h5>
                  <p>Brief description about the user.</p>
              </div>
          </div>
      </div>
      
      <!-- Profile Content -->
      <div class="col-md-8">
          <div class="card">
              <div class="card-body">
                  <!-- Tabs for Activity, Timeline, Settings -->
                  <ul class="nav nav-tabs mb-3">
                      <li class="nav-item">
                          <a class="nav-link active" href="#">Settings</a>
                      </li>
                  </ul>

                  <!-- Settings Form -->
                  <form>
                      <div class="mb-3 row">
                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" placeholder="Name">
                          </div>
                      </div>
                      <div class="mb-3 row">
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" placeholder="Email">
                          </div>
                      </div>
                      <div class="mb-3 row">
                          <label for="experience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="experience" rows="3" placeholder="Experience"></textarea>
                          </div>
                      </div>
                      <div class="mb-3 row">
                          <label for="skills" class="col-sm-2 col-form-label">Skills</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="skills" rows="2" placeholder="Skills"></textarea>
                          </div>
                      </div>
                      <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="terms">
                          <label class="form-check-label" for="terms">I agree to the <a href="#">terms and conditions</a></label>
                      </div>
                      <button type="submit" class="btn btn-danger">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection