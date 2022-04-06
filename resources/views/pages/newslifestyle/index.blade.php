@extends('layouts.master')

@section('title', 'Новости и образ жизни')

@section('content')
  <main class="newslifestyle-page">
    <section class="newslifestyle">
      <a class="newslifestyle__link" href="{{ route('newslifestyle.news') }}">
        <img class="newslifestyle__img" src="{{ asset('img/news-vitrin.png') }}" alt="Новости компании">
      </a>
      <h2 class="newslifestyle__title sample-title" id="fragment">{{ $page['news-title'] }}</h2>
      <ul class="newslifestyle-list">
        <li class="newslifestyle-list__item">
          <x-newslifestyle :newslifestyle="$page['newslifestyles'][0]" />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle :newslifestyle="$page['newslifestyles'][1]" />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle :newslifestyle="$page['newslifestyles'][2]" />
        </li>
      </ul>
    </section>

    <section class="newslifestyle">
      <a class="newslifestyle__link" href="{{ route('newslifestyle.lifestyle') }}">
        <img class="newslifestyle__img" src="{{ asset('img/lifestyle-vitrin.png') }}" alt="Образ жизни">
      </a>
      <h2 class="newslifestyle__title sample-title">{{ $page['lifestyle-title'] }}</h2>
      <ul class="newslifestyle-list">
        <li class="newslifestyle-list__item">
          <x-newslifestyle :newslifestyle="$page['newslifestyles'][3]" />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle :newslifestyle="$page['newslifestyles'][4]" />
        </li>
        <li class="newslifestyle-list__item">
          <x-newslifestyle :newslifestyle="$page['newslifestyles'][5]" />
        </li>
      </ul>
    </section>
    {{ $page['newslifestyles']->fragment('fragment')->links() }}
  </main>
@endsection
