@extends('layouts.master')

@section('title', 'О нас')

@section('content')
  <main class="about-page">
    <div class="about-page__left-column">
      <section class="about-page__about-belinda sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">{{ $page['about-title'] }}</h2>
        <p>{{ $page['about-text'] }}</p>
      </section>

      <a class="about-page__products pretty-link" href="{{ route('products.index') }}" class="all-products-link">
        <div class="about-page__products-inner pretty-link__inner">
          <h3 class="pretty-link__title">{{ $page['products-title'] }}</h3>
          <p class="pretty-link__text">{{ $page['products-text'] }}</p>
        </div>
      </a>

      <section class="advantages">
        <h2 class="advantages__title sample-title">{{ $page['advantages-title'] }}</h2>
        <ul class="advantages-list">
          <li class="advantage-item">{{ $page['advantage-1'] }}</li>
          <li class="advantage-item">{{ $page['advantage-2'] }}</li>
          <li class="advantage-item">{{ $page['advantage-3'] }}</li>
          <li class="advantage-item">{{ $page['advantage-4'] }}</li>
          <li class="advantage-item">{{ $page['advantage-5'] }}</li>
          <li class="advantage-item">{{ $page['advantage-6'] }}</li>
        </ul>
      </section>
    </div>

    <div class="about-page__right-column">
      <a class="about-page__news pretty-link" href="{{ route('newslifestyle.index') }}">
        <div class="about-page__news-inner pretty-link__inner">
          <h3 class="pretty-link__title">{{ $page['news-title'] }}</h3>
          <p class="pretty-link__text">{{ $page['news-text'] }}</p>
        </div>
      </a>

      <section class="principles sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">{{ $page['principles-title'] }}</h2>
        <h3>{{ $page['principles-title-1'] }}</h3>
        <p>{{ $page['principles-text-1'] }}</p>
        <h3>{{ $page['principles-title-2'] }}</h3>
        <p>{{ $page['principles-text-2'] }}</p>
        <h3>{{ $page['principles-title-3'] }}</h3>
        <p>{{ $page['principles-text-3'] }}</p>
      </section>

      <section class="mission-vision">
        <h2 class="mission-vision__title sample-title">{{ $page['mission-vision-title'] }}</h2>
        <ul class="mission-vision-list">
          <li class="mission-vision-item sample-wrapper">
            <h3 class="sample-wrapper__title">{{$page['mission-vision-title-1']}}</h3>
            <p>{{$page['mission-vision-text-1']}}</p>
          </li>
          <li class="mission-vision-item sample-wrapper">
            <h3 class="sample-wrapper__title">{{$page['mission-vision-title-2']}}</h3>
            <p>{{$page['mission-vision-text-2']}}</p>
          </li>
          <li class="mission-vision-item sample-wrapper">
            <h3 class="sample-wrapper__title">{{$page['mission-vision-title-3']}}</h3>
            <p>{{$page['mission-vision-text-3']}}</p>
          </li>
        </ul>
      </section>
    </div>

    <section class="global-presence">
      <h2 class="global-presence__title sample-title">{{$page['global-presence-title']}}</h2>
      <div class="global-presence__carousel">
        <div class="glide" data-type="carousel">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach (range(1, 4) as $key)
                <li class="glide__slide">
                  <a class="site-item sample-wrapper" href="https://belinda.tj" target="_blank">
                    <div class="site-item__inner">
                      <h3 class="sample-wrapper__title">Таджикистан</h3>
                      <cite class="site-item__url">www.belinda.tj</cite>
                    </div>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
          </div>
        </div>
      </div>

      <div class="about-page__map map-wrapper">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.625289276977!2d68.7709343153399!3d38.54240497962693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x954badaf300d3859!2zMzjCsDMyJzMyLjciTiA2OMKwNDYnMjMuMiJF!5e0!3m2!1sru!2s!4v1646978641665!5m2!1sru!2s" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </main>
@endsection
