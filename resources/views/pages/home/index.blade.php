@extends('layouts.master')

@section('title', 'Главная')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/pages/home/index.css') }}">
@endsection

@section('content')
  <main class="home-page">
    <h1>Home page</h1>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/pages/home/index.js') }}" type="module"></script>
@endsection
