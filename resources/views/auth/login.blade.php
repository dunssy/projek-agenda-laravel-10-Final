@extends('layout.main')
@section('konten')
	
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image:url({{URL::asset('img/1.jpg')}});">
                <span class="login100-form-title-1">
                   Agenda SMKN COMPRENG
                </span>
            </div>

            <form action="/auth/login" method="POST" class="login100-form validate-form">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email wajib diisi">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" value="{{old('email')}}" placeholder="Enter Email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18"  data-validate="Password wajib diisi">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" value ="{{old('email')}}" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-b-30">
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection