@extends('layouts.master')

@section('title', 'Главная')

@section('content')
  <main class="home-page">
    <div class="sample-wrapper sample-wrapper--dark">
      <q class="sample-wrapper__title sample-wrapper__title--big" cite="{{ route('home.index') }}">Здоровье - вечная ценность</q>
      <p>«Белинда» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых. Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.</p>
      <p>Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</p>
      <p>«Белинда» открывает свои двери для всех желающих приобрести международный опыт в области фармацевтики. Мы сторонники высокой кадровой политики компании, направленной на развитие команды амбициозных и талантливых профессионалов. Наша цель – создать комфортные и хорошие условия труда для всех и для каждого сотрудника.</p>
    </div>
    <a class="home-page__about sample-wrapper sample-wrapper--link" href="{{ route('about.index') }}">
      <h3 class="sample-wrapper__title">О нас</h3>
      <p>Узнать больше о
Белинде</p>
    </a>
    <div class="home-page__product-wrapper">
      <a class="home-page__product sample-wrapper sample-wrapper--link" href="{{ route('products.index') }}">
        <h3 class="sample-wrapper__title">Наши продукты</h3>
        <p>Узнать больше о
наших продуктах</p>
      </a>
    </div>
    <a class="home-page__carrier hover-wrapper" href="{{ route('carrier.index') }}">
      <h3 class="hover-wrapper__title">Карьера</h3>
      <p>Вакансии и
работа в компании</p>
    </a>
    <a class="home-page__news sample-wrapper sample-wrapper--link" href="{{ route('newslifestyle.index') }}">
      <h3 class="sample-wrapper__title">Новости компании</h3>
      <p>Самая популярная
новость компании</p>
    </a>
    <a class="home-page__lifestyle hover-wrapper" href="{{ route('newslifestyle.index') }}">
      <h3 class="hover-wrapper__title">Образ жизни</h3>
      <p>Самая популярная статья
об образе жизни</p>
    </a>
    <div class="home-page__attention sample-wrapper">
      <h3 class="sample-wrapper__title">Внимание</h3>
      <p>Информация, представленная на этом сайте, не должна использоваться для самодиагностики и лечения и не может служить заменой очной консультации с доктором.</p>
    </div>
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

    <div class="map-wrapper">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.625289276977!2d68.7709343153399!3d38.54240497962693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x954badaf300d3859!2zMzjCsDMyJzMyLjciTiA2OMKwNDYnMjMuMiJF!5e0!3m2!1sru!2s!4v1646978641665!5m2!1sru!2s" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </main>
@endsection
