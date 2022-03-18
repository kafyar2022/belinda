@extends('layouts.master')

@section('title', 'Новости и образ жизни')

@section('content')
  <main class="newslifestyle-page">
    <section class="newslifestyle">
      <a class="newslifestyle__link" href="{{ route('newslifestyle.news') }}">
        <img class="newslifestyle__img" src="{{asset('img/news-vitrin.png')}}" alt="Новости компании">
      </a>
      <h2 class="newslifestyle__title sample-title">Новости компании</h2>
      <ul class="newslifestyle-list">
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
      </ul>
    </section>

    <section class="newslifestyle">
      <a class="newslifestyle__link" href="{{ route('newslifestyle.lifestyle') }}">
        <img class="newslifestyle__img" src="{{asset('img/lifestyle-vitrin.png')}}" alt="Образ жизни">
      </a>
      <h2 class="newslifestyle__title sample-title">Образ жизни</h2>
      <ul class="newslifestyle-list">
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
      </ul>
    </section>
  </main>
@endsection
