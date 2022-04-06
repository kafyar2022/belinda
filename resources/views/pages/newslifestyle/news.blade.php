@extends('layouts.master')

@section('title', 'Новости')

@section('content')
  <main class="news-page">
    <section class="newslifestyle">
      <a class="newslifestyle__link" href="{{ route('newslifestyle.index') }}">
        <img class="newslifestyle__img" src="{{asset('img/news-vitrin.png')}}" alt="Новости компании">
      </a>
      <h2 class="newslifestyle__title sample-title" id="fragment">{{ $page['company-news'] }}</h2>
      <ul class="newslifestyle-list newslifestyle-list--more">
        @foreach ($page['news'] as $news)
          <li class="newslifestyle-list__item">
            <x-newslifestyle :newslifestyle="$news" />
          </li>
        @endforeach
      </ul>
    </section>
    {{ $page['news']->fragment('fragment')->links() }}
  </main>
@endsection
