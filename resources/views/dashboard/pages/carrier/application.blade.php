@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">{{ $application->vacancy->title }}</h1>
    <p>{{ $application->name }}</p>
    <p>{{ $application->email }}</p>
    <p>{{ $application->phone }}</p>
    <p>{{ $application->description }}</p>
    @if ($application->cv)
      <a href="{{ route('application.download') }}?id={{ $application->id }}">Скачать CV</a>
    @endif
  </main>
@endsection
