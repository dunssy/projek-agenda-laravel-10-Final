<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda Laravel || {{$title}}</title>
    {{-- Favicon for web --}}
    <link rel="icon" href="{{ asset('img/favicon_io/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  {{-- icon --}}
    <!-- Ionicons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  {{-- boostrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">  
  {{-- Css Link in Sidebbar --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  {{-- Link css in Auth --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @yield('konten')
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    {{-- Sidebar Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
      {{-- Sidebar script --}}
      <script src="{{asset('js/script.js')}}"></script>
      {{-- Script With Auth --}}
      <script src="{{asset('js/main.js')}}"></script>
  </body>
</body>
</html>
</html>