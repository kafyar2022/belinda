@extends('layouts.master')

@section('title', 'Продукты')

@section('content')
  <main class="products-page">
    <section class="products-page__info">
      <div class="sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">Продукты Белинда</h2>
        <p>Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</p>
      </div>
    </section>
    <div class="products-page__filter">
      <form class="products-page__filter-form products-filter">
        @csrf
        <p class="products-filter__item">
          <label class="visually-hidden" for="classification">АТХ классификация</label>
          <select name="classification" id="classification" data-placeholder="АТХ классификация">
            <option data-separator="true" value="">АТХ классификация</option>
            <option value="#">Аминокислоты</option>
            <option value="#">Аминокислоты</option>
            <option value="#">Аминокислоты</option>
            <option value="#">Аминокислоты</option>
            <option value="#">Аминокислоты</option>
            <option value="#">Аминокислоты</option>
            <option value="#">Аминокислоты</option>
          </select>
        </p>
        <p class="products-filter__item">
          <label class="visually-hidden" for="nosology">Нозология</label>
          <select name="nosology" id="nosology" data-placeholder="Нозология">
            <option data-separator="true" value="">Нозология</option>
            <option value="#">Аллергология</option>
            <option value="#">Аллергология</option>
            <option value="#">Аллергология</option>
          </select>
        </p>
        <p class="products-filter__item">
          <label class="visually-hidden" for="recipe">Тип</label>
          <select name="recipe" id="recipe" data-placeholder="Тип">
            <option data-separator="true" value="">Тип</option>
            <option value="#">OTC</option>
            <option value="#">OTC</option>
            <option value="#">OTC</option>
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
      <h2 class="products__title sample-title">Все продукты</h2>
      <ul class="products-list">
        @foreach (range(1,16) as $key)
          <li class="products-list__item">
            <x-product :product="$key" />
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/products.js') }}" type="module"></script>
@endsection
