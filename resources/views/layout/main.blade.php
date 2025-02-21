<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda Smkn || {{$title}}</title>
    {{-- Favicon for web --}}
    <link rel="icon" href="{{ asset('img/favicon_io/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  @vite(['resources/css/app.css','resources/js/app.js'])
   {{-- Css Link in Sidebbar --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  {{-- Link css in Auth --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  {{-- Ion Icon --}}
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
{{-- Flasher --}}
<link rel="stylesheet" href="{{asset('vendor/flasher/flasher.min.css')}}">
 <!-- SweetAlert CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login-asset/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    @yield('konten')
      {{-- Sidebar script --}}
      <script src="{{asset('js/script.js')}}"></script>
      {{-- Script With Auth --}}
      <script src="{{asset('js/main.js')}}"></script>
      {{-- Ion Icon --}}  
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      {{-- Flasher script --}}
      <script src="{{asset('vendor/flasher/flasher.min.js')}}"></script>
      {{-- Sweetalert --}}
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
<!--=======================================LOGIN ASSET======================================================-->
	<script src="{{asset('login-asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('login-asset/vendor/animsition/js/animsition.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('login-asset/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('login-asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('login-asset/vendor/select2/select2.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('login-asset/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('login-asset/vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('login-asset/vendor/countdowntime/countdowntime.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{asset('login-asset/js/main.js')}}"></script>
  
  </body>
</body>
</html>
</html>