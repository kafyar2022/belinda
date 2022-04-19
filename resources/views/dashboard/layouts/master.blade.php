<!DOCTYPE html>
<html lang="ru">

<head class="page">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="none">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="yandex" content="none">

  <title>Belinda Laboratories</title>
  {{-- Simditor styles --}}
  <link rel="stylesheet" href="{{ asset('simditor/simditor.css') }}">
  {{-- App Styles --}}
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>


<body class="page-body">

  @include('dashboard.layouts.header')

  @yield('content')

  <!-- JQuery 3.6  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  {{-- Simditor scripts --}}
  <script src="{{ asset('simditor/module.js') }}"></script>
  <script src="{{ asset('simditor/hotkeys.js') }}"></script>
  <script src="{{ asset('simditor/uploader.js') }}"></script>
  <script src="{{ asset('simditor/simditor.js') }}"></script>
  {{-- App Scripts --}}
  @yield('script')
</body>

</html>
