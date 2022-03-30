@extends('layouts.master')

@section('title', 'Продукт')

@section('content')
  <main class="products-show-page">
    <div class="products-show-page__description sample-wrapper sample-wrapper--dark">
      <h1 class="sample-wrapper__title sample-wrapper__title--big">{{ $page['product']->title }}</h1>
      <p>{{ $page['product']->description }}</p>
    </div>

    <figure class="products-show-page__product product">
      <div class="product__img-wrapper">
        <img class="product__img" src="{{ asset('files/products/dorsob.png') }}" alt="{{ $page['product']->title }}">
      </div>
      <p class="product__category">{{ $page['product']->prescription }}</p>
      <a class="product__download-link" href="{{route('products.download_instruction')}}?id={{$page['product']->id}}">{{ $app['download-instructions'] }}</a>
    </figure>

    <dl class="products-show-page__info accordion" data-type="accordion">
      <dt class="accordion__head accordion__head--hidden">
        <div class="sample-description-term">
          <h3 class="sample-description-term__title">{{ $app['composition'] }}</h3>
          <p class="sample-description-term__subtitle">{{ $page['product']->composition }}</p>
          <button class="sample-description-term__button dropdown-icon">{{ $app['see'] }}</button>
        </div>
      </dt>
      <dd class="accordion__body">
        <div class="sample-description-definition">{{ $page['product']->composition }}</div>
      </dd>
      <dt class="accordion__head accordion__head--hidden">
        <div class="sample-description-term">
          <h3 class="sample-description-term__title">{{ $app['indications'] }}</h3>
          <p class="sample-description-term__subtitle">{{ $page['product']->indications }}</p>
          <button class="sample-description-term__button dropdown-icon">{{ $app['see'] }}</button>
        </div>
      </dt>
      <dd class="accordion__body">
        <div class="sample-description-definition">{{ $page['product']->indications }}</div>
      </dd>
      <dt class="accordion__head accordion__head--hidden">
        <div class="sample-description-term">
          <h3 class="sample-description-term__title">{{ $app['mode'] }}</h3>
          <p class="sample-description-term__subtitle">{{ $page['product']->mode }}</p>
          <button class="sample-description-term__button dropdown-icon">{{ $app['see'] }}</button>
        </div>
      </dt>
      <dd class="accordion__body">
        <div class="sample-description-definition">{{ $page['product']->mode }}</div>
      </dd>
    </dl>

    <section class="products-show-page__similar similar-products">
      <h2 class="similar-products__title sample-title">{{ $app['similar-products'] }}</h2>
      <div class="glide" data-type="carousel-half">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($page['similar-products'] as $product)
              <li class="glide__slide">
                <x-product :product="$product" />
              </li>
            @endforeach
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
      </div>
    </section>

    <section class="products-show-page__popular popular-products">
      <h2 class="popular-products__title sample-title">{{ $app['popular-products'] }}</h2>
      <div class="glide" data-type="carousel">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($page['popular-products'] as $product)
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
      <a class="popular-products__link red-link" href="{{ route('products.index') }}">{{$app['back-to-products']}}</a>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/products-show.js') }}" type="module"></script>
@endsection
