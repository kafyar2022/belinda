@extends('layouts.master')

@section('title', 'Главная')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/pages/home/index.css') }}">
@endsection

@section('content')
  <main class="home-page">
    <div class="company-info dark-card">
      <blockquote>Здоровье - вечная ценность</blockquote>
      <p>«Белинда» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых. Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.</p>
      <p>Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</p>
      <p>«Белинда» открывает свои двери для всех желающих приобрести международный опыт в области фармацевтики. Мы сторонники высокой кадровой политики компании, направленной на развитие команды амбициозных и талантливых профессионалов. Наша цель – создать комфортные и хорошие условия труда для всех и для каждого сотрудника.</p>
    </div>
    <a class="about-card light-card" href="{{route('about.index')}}">
      <h3 class="light-card-term">О нас</h3>
      <p class="light-card-definition">Узнать больше о
Белинде</p>
    </a>
    <a class="products-card light-card" href="{{route('products.index')}}">
      <h3 class="light-card-term">Наши продукты</h3>
      <p class="light-card-definition">Узнать больше о
наших продуктах</p>
    </a>
    <a class="carrier-card light-card" href="{{route('carrier.index')}}">
      <h3 class="light-card-term">Карьера</h3>
      <p class="light-card-definition">Вакансии и
работа в компании</p>
    </a>
    <a class="news-card light-card" href="{{route('newslifestyle.index')}}">
      <h3 class="light-card-term">Новости компании</h3>
      <p class="light-card-definition">Самая популярная новость компании</p>
    </a>
    <a class="lifestyle-card light-card" href="{{route('newslifestyle.index')}}">
      <h3 class="light-card-term">Образ жизни</h3>
      <p class="light-card-definition">Самая популярная статья об образе жизни</p>
    </a>
    <div class="light-card">
      <h3 class="light-card-term">Внимание</h3>
      <p class="light-card-definition">Информация, представленная на этом сайте, не должна использоваться для самодиагностики и лечения и не может служить заменой очной консультации с доктором.</p>
    </div>

    <div class="products-carousel">
      <a class="product-card" href="#">
        <figure>
          <figcaption>Dorsob-T</figcaption>
          <img src="{{asset('files/products/img/product.png')}}" alt="Dorsob-T">
          <p class="category">Eye Drops</p>
          <p class="recipe">OTC</p>
        </figure>
      </a>
      <a class="product-card" href="#">
        <figure>
          <figcaption>Dorsob-T</figcaption>
          <img src="{{asset('files/products/img/product.png')}}" alt="Dorsob-T">
          <p class="category">Eye Drops</p>
          <p class="recipe">OTC</p>
        </figure>
      </a>
      <a class="product-card" href="#">
        <figure>
          <figcaption>Dorsob-T</figcaption>
          <img src="{{asset('files/products/img/product.png')}}" alt="Dorsob-T">
          <p class="category">Eye Drops</p>
          <p class="recipe">OTC</p>
        </figure>
      </a>
      <a class="product-card" href="#">
        <figure>
          <figcaption>Dorsob-T</figcaption>
          <img src="{{asset('files/products/img/product.png')}}" alt="Dorsob-T">
          <p class="category">Eye Drops</p>
          <p class="recipe">OTC</p>
        </figure>
      </a>
    </div>

    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.625289276977!2d68.7709343153399!3d38.54240497962693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x954badaf300d3859!2zMzjCsDMyJzMyLjciTiA2OMKwNDYnMjMuMiJF!5e0!3m2!1sru!2s!4v1646978641665!5m2!1sru!2s" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/pages/home/index.js') }}" type="module"></script>
@endsection
