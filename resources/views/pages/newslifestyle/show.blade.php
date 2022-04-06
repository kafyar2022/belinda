@extends('layouts.master')

@section('title', 'Новости и образ жизни')

@section('content')
  <main class="newslifestyle-show-page">
    <div class="newslifestyle-show">
      <img class="newslifestyle-show__img" src="{{ asset('files/lifestyles/lifestyle.png') }}" alt="LOREN IPSUM SAMPLE TEXT">
      <div class="newslifestyle-show__inner">
        <h1 class="newslifestyle-show__title">{{ $page['newslifestyle']->title }}</h1>
        <time class="newslifestyle-show__datetime" datetime="{{ $page['newslifestyle']->created_at }}">{{ $page['newslifestyle']->created_at->format('Y.m.d') }}</time>
        <p class="newslifestyle-show__text">{{ $page['newslifestyle']->description }}</p>
      </div>
    </div>

    <div class="glide" data-type="carousel-half">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @foreach ($page['similars'] as $newslifestyle)
            <li class="glide__slide">
              <x-newslifestyle :newslifestyle="$newslifestyle" />
            </li>
          @endforeach
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
      </div>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/newslifestyle.js') }}" type="module"></script>
@endsection
