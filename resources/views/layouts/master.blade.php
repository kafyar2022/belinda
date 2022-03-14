<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="none">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="yandex" content="none">

  <title>@yield('title') - Belinda Laboratories</title>
  
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  @yield('styles')
</head>

<body>
  <div class="container">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
  </div>

  <script src="{{ asset('js/main.js') }}"></script>
  @yield('scripts')
</body>

</html>
