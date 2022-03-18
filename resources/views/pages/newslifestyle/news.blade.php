@extends('layouts.master')

@section('title', 'Новости')

@section('content')
  <main class="news-page">
    <section class="newslifestyle">
      <a class="newslifestyle__link" href="{{ route('newslifestyle.index') }}">
        <img class="newslifestyle__img" src="{{asset('img/news-vitrin.png')}}" alt="Новости компании">
      </a>
      <h2 class="newslifestyle__title sample-title">Новости компании</h2>
      <ul class="newslifestyle-list newslifestyle-list--more">
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle />
        </li>
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
