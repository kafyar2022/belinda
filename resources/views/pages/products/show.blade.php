@extends('layouts.master')

@section('title', 'Продукт')

@section('content')
  <main class="products-show-page">
    <div class="products-show-page__description sample-wrapper sample-wrapper--dark">
      <h1 class="sample-wrapper__title sample-wrapper__title--big">Dorsob-T</h1>
      <p>Cостоит из двух компонентов: дорзоламида гидрохлорида и тимолола малеата. Каждый из этих двух компонентов снижает повышенное внутриглазное давление за счет уменьшения секреции внутриглазной жидкости, но делает это посредством разных механизмов действия.</p>
    </div>

    <figure class="products-show-page__product product">
      <div class="product__img-wrapper">
        <img class="product__img" src="{{asset('files/products/dorsob.png')}}" alt="Dorsob-T">
      </div>
      <p class="product__category">OTC</p>
      <a class="product__download-link" href="#">Скачать
инструкцию</a>
    </figure>

    <dl class="products-show-page__info accordion" data-type="accordion">
      <dt class="accordion__head accordion__head--hidden">
        <div class="sample-description-term">
          <h3 class="sample-description-term__title">Состав</h3>
          <p class="sample-description-term__subtitle">1 мл раствора содержит:</p>
          <button class="sample-description-term__button dropdown-icon">Посмотреть</button>
        </div>
      </dt>
      <dd class="accordion__body">
        <div class="sample-description-definition">активные вещества: дорзоламида гидрохлорида 22,26 (эквивалентно дорзоламиду 20,00), тимолола малеата 6.83 мг (эквивалентно тимололу 5,00 мг) вспомогательные вещества: маннитол, натрия цитрат, гидроксиэтилцеллюлоза (натрозол НХ 250), натрия гидроксида 1 М раствор до рН 5,65, бензалкония хлорид 50 % раствор, натрия гидроксида 1 М раствор до рН 5,5-5,8, вода для инъекций.</div>
      </dd>
      <dt class="accordion__head accordion__head--hidden">
        <div class="sample-description-term">
          <h3 class="sample-description-term__title">Показания к применению</h3>
          <p class="sample-description-term__subtitle">Для лечения повышенного внутриглазного давления</p>
          <button class="sample-description-term__button dropdown-icon">Посмотреть</button>
        </div>
      </dt>
      <dd class="accordion__body">
        <div class="sample-description-definition">активные вещества: дорзоламида гидрохлорида 22,26 (эквивалентно дорзоламиду 20,00), тимолола малеата 6.83 мг (эквивалентно тимололу 5,00 мг) вспомогательные вещества: маннитол, натрия цитрат, гидроксиэтилцеллюлоза (натрозол НХ 250), натрия гидроксида 1 М раствор до рН 5,65, бензалкония хлорид 50 % раствор, натрия гидроксида 1 М раствор до рН 5,5-5,8, вода для инъекций.</div>
      </dd>
      <dt class="accordion__head accordion__head--hidden">
        <div class="sample-description-term">
          <h3 class="sample-description-term__title">Способ применения</h3>
          <p class="sample-description-term__subtitle">Взрослым (в том числе пожилым):</p>
          <button class="sample-description-term__button dropdown-icon">Посмотреть</button>
        </div>
      </dt>
      <dd class="accordion__body">
        <div class="sample-description-definition">активные вещества: дорзоламида гидрохлорида 22,26 (эквивалентно дорзоламиду 20,00), тимолола малеата 6.83 мг (эквивалентно тимололу 5,00 мг) вспомогательные вещества: маннитол, натрия цитрат, гидроксиэтилцеллюлоза (натрозол НХ 250), натрия гидроксида 1 М раствор до рН 5,65, бензалкония хлорид 50 % раствор, натрия гидроксида 1 М раствор до рН 5,5-5,8, вода для инъекций.</div>
      </dd>
    </dl>

    <section class="products-show-page__similar similar-products">
      <h2 class="similar-products__title sample-title">Похожие продукты</h2>
      <div class="glide" data-type="carousel-half">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach (range(1, 4) as $key)
              <li class="glide__slide">
                <x-product :product="$key" />
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
      <h2 class="popular-products__title sample-title">Популярные продукты</h2>
      <div class="glide" data-type="carousel">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach (range(1, 4) as $key)
              <li class="glide__slide">
                <x-product :product="$key" />
              </li>
            @endforeach
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
      </div>
      <a class="popular-products__link red-link" href="{{ route('products.index') }}">Назад ко всем продуктам</a>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/products-show.js') }}" type="module"></script>
@endsection
