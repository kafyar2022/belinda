@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">{{ $vacancy->title }}</h1>

    <div class="toolbar-holder">
      <form class="search-form">
        <input class="search-form__input" type="search" placeholder="Введите ключевое слово . . ." autocomplete="off">
      </form>
      <p class="output" style="margin-right: 0">{{ $vacancy->applications->count() }} заявок</p>
    </div>

    <ul class="data-list">
      @foreach ($applications as $application)
        <li class="data-list__item">
          <p class="data-list__title">{{ $application->name }}</p>
          <a class="action action--edit" href="{{ route('application', $application->id) }}">Посмотреть</a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/application.js') }}" type="module"></script>
@endsection
