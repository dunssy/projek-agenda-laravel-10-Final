<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda Laravel || {{$title}}</title>
    {{-- Favicon for web --}}
    <link rel="icon" href="{{ asset('img/favicon_io/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @yield('konten')
  </body>
</body>
</html>
</html>