@extends('layouts.master')

@section('title', 'Продукты')

@section('content')
  <main class="products-page">
    <section class="products-page__info">
      <div class="sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">{{ $page['belinda-products-title'] }}</h2>
        <p>{{ $page['belinda-products-text'] }}</p>
      </div>
    </section>
    
    <div class="products-page__filter">
      <form class="products-page__filter-form products-filter" action="{{route('products.filter')}}" method="post">
        @csrf
        <p class="products-filter__item">
          <label class="visually-hidden" for="classification">{{ $page['classification-title'] }}</label>
          <select name="classification" id="classification" data-placeholder="{{ $page['classification-title'] }}">
            <option value="">{{ $page['classification-title'] }}</option>
            @foreach ($page['classifications'] as $classification)
              <option value="{{ $classification->id }}">{{ $classification->title }}</option>
            @endforeach
          </select>
        </p>
        <p class="products-filter__item">
          <label class="visually-hidden" for="nosology">{{ $page['nosology-title'] }}</label>
          <select name="nosology" id="nosology" data-placeholder="{{ $page['nosology-title'] }}">
            <option value="">{{ $page['nosology-title'] }}</option>
            @foreach ($page['nosologies'] as $nosology)
              <option value="{{ $nosology->id }}">{{ $nosology->title }}</option>
            @endforeach
          </select>
        </p>
        <p class="products-filter__item">
          <label class="visually-hidden" for="recipe">{{ $page['prescription'] }}</label>
          <select name="prescription" id="recipe" data-placeholder="{{ $page['prescription'] }}">
            <option value="">{{ $page['prescription'] }}</option>
            <option>OTC</option>
            <option>RX</option>
            <option>BAD</option>
          </select>
        </p>
      </form>
      <form class="products-page__search-form products-search">
        @csrf
        <p class="products-search__item">
          <label class="products-search__label" for="product-keyword">
            <span class="visually-hidden">Поиск продукта</span>
            <input class="products-search__input" id="product-keyword" type="search" name="product-keyword" placeholder="Поиск продукта" autocomplete="off">
          </label>
        </p>
      </form>
    </div>

    <section class="products">
      <h2 class="products__title sample-title">{{ $page['all-products'] }}</h2>
      <div class="products-inner">
        <ul class="products-list">
          @foreach ($page['products'] as $product)
            <li class="products-list__item">
              <x-product :product="$product" />
            </li>
          @endforeach
        </ul>
        {{ $page['products']->links() }}
      </div>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/products.js') }}" type="module"></script>
@endsection
