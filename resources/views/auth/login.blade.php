@extends('layout.main')
@section('konten')
    <div class="container vh-100 d-flex align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Login Di Sini</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    @foreach ($errors->all() as $item)    
                                    <ul>
                                        <li>{{$item}}</li>
                                    </ul>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        @endif 
                        <form action="/auth/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        </form>
                        <div class="mt-3">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection