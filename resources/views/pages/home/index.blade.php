@extends('layouts.master')

@section('title', 'Главная')

@section('content')
  <main class="home-page">
    <div class="sample-wrapper sample-wrapper--dark">
      <q class="sample-wrapper__title sample-wrapper__title--big" cite="{{ route('home.index') }}">{{$page['quote']}}</q>
      <p>{{$page['info']}}</p>
    </div>
    <a class="home-page__about sample-wrapper sample-wrapper--link" href="{{ route('about.index') }}">
      <h3 class="sample-wrapper__title">{{$page['about-title']}}</h3>
      <p>{{$page['about-text']}}</p>
    </a>
    <div class="home-page__product-wrapper">
      <a class="home-page__product sample-wrapper sample-wrapper--link" href="{{ route('products.index') }}">
        <h3 class="sample-wrapper__title">{{$page['products-title']}}</h3>
        <p>{{$page['products-text']}}</p>
      </a>
    </div>
    <a class="home-page__carrier hover-wrapper" href="{{ route('carrier.index') }}">
      <h3 class="hover-wrapper__title">{{$page['carrier-title']}}</h3>
      <p>{{$page['carrier-text']}}</p>
    </a>
    <a class="home-page__news sample-wrapper sample-wrapper--link" href="{{ route('newslifestyle.index') }}">
      <h3 class="sample-wrapper__title">{{$page['news-title']}}</h3>
      <p>{{$page['news-text']}}</p>
    </a>
    <a class="home-page__lifestyle hover-wrapper" href="{{ route('newslifestyle.index') }}">
      <h3 class="hover-wrapper__title">{{$page['lifestyle-title']}}</h3>
      <p>{{$page['lifestyle-text']}}</p>
    </a>
    <div class="home-page__attention sample-wrapper">
      <h3 class="sample-wrapper__title">{{$page['attention-title']}}</h3>
      <p>{{$page['attention-text']}}</p>
    </div>
    <div class="glide" data-type="carousel">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @foreach ($page['products'] as $product)
            <li class="glide__slide">
              <x-product :product="$product" />
            </li>
          @endforeach
        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
      </div>
    </div>

    <div class="map-wrapper">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.625289276977!2d68.7709343153399!3d38.54240497962693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x954badaf300d3859!2zMzjCsDMyJzMyLjciTiA2OMKwNDYnMjMuMiJF!5e0!3m2!1sru!2s!4v1646978641665!5m2!1sru!2s" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </main>
@endsection
