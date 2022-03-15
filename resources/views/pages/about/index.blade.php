@extends('layouts.master')

@section('title', 'О нас')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
  <main class="about-page">
    <div class="left-wrapper">
      <section class="about-belinda dark-card">
        <h2 class="dark-card-term">О Белинде</h2>
        <p>«Белинда» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых.</p>
        <p>Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.</p>
        <p>Мы котируемся на рынках Европы, Азии и стран СНГ. На данный момент мы сотрудничаем с более чем 75 агентами и партнерами из 9 разных стран. Наша компания также активно занимается продвижением фармацевтической продукции в сфере маркетинга. Мы стремимся к лучшему, сохраняя качество и высокие стандарты.</p>
        <p>Таким образом, с большим потенциалом в области медицины, которая создает новые лекарства. Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов. Также мы следим за развитием фармацевтического рынка, достижениями в лечении различных заболеваний, а также новыми направлениями.</p>
      </section>

      <a href="{{ route('products.index') }}" class="all-products-link">
        <div class="all-products-inner">
          <h3>Все продукты</h3>
          <p>Узнайте больше о <br> наших продуктах</p>
        </div>
      </a>

      <section class="advantages">
        <h2 class="heading-2">Наши преимущества</h2>
        <ul class="advantages-list">
          <li>Эффективность</li>
          <li>Инновации</li>
          <li>Представление</li>
          <li>Сотрудничество</li>
          <li>Работа в команде</li>
          <li>Компетентность</li>
        </ul>
      </section>
    </div>

    <div class="right-wrapper">
      <a href="{{ route('products.index') }}" class="industry-news-link">
        <div class="industry-news-inner">
          <h3>Все продукты</h3>
          <p>Актуальные и полезные <br> новости компании</p>
        </div>
      </a>

      <section class="our-principles dark-card">
        <h2 class="dark-card-term">Наши принципы</h2>
        <dl>
          <div class="principle-item">
            <dt>Принципы нашей работы:</dt>
            <dd>Профессионализм команды; <br>
              Обмен опытом и своими знаниями; <br>
              Инновации, импровизация и поиск оптимальных решений; <br>
              Проведение непрерывного обучения сотрудников компании; <br>
              Достижение максимальных результатов в кратчайшие сроки; <br>
              Оптимальное использование ресурсов;</dd>
          </div>
          <div class="principle-item">
            <dt>Партнерство:</dt>
            <dd>Понимание и доверие партнеров; <br>
              Оптимальное решение в достижении взаимовыгодного результата;</dd>
          </div>
          <div class="principle-item">
            <dt>Обязанность:</dt>
            <dd>Соблюдение принципов работы; <br>
              За качество товара потребителю; <br>
              За выполнение всех обязательств перед партнерами;</dd>
          </div>
        </dl>
      </section>

      <section class="mission-vision">
        <h2 class="heading-2">Наша миссия и видение</h2>
        <ul class="mission-vision-list">
          <li class="light-card">
            <h3 class="light-card-term">Видение</h3>
            <p>Девиз нашей компании – доступность, а главное качество лекарственных средств, которые являются основой наших продаж. За время существования нашей компании мы зарекомендовали себя как надежный партнер и создали дистрибьюторскую сеть фармацевтической продукции.</p>
          </li>
          <li class="light-card">
            <h3 class="light-card-term">Миссия</h3>
            <p>Установление высоких стандартов качества, безопасности и доступности лекарственных средств для различных категорий населения независимо от уровня их доходов и Содействие процветанию здорового общества путем обеспечения пациентов качественными, безопасными и доступными лекарственными средствами.</p>
          </li>
          <li class="light-card">
            <h3 class="light-card-term">Цель</h3>
            <p>The main aim of our company is compliance with all the requirements of modern pharmaceutical market, improving methods of modern treatment, medical services and production of needed drugs.</p>
          </li>
        </ul>
      </section>
    </div>

    <section class="global-presence">
      <h2 class="heading-2">Глобальное присутствие</h2>
      <div class="earth"></div>
      <div class="glide presence-glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach (range(1, 4) as $key)
              <li class="glide__slide">
                <a href="https://belinda.tj" class="light-card sites-link" target="_blank">
                  <div>
                    <h3 class="light-card-term">Таджикистан</h3>
                    <p>www.belinda.tj</p>
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
      <div id="map" style="height: 312px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.625289276977!2d68.7709343153399!3d38.54240497962693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x954badaf300d3859!2zMzjCsDMyJzMyLjciTiA2OMKwNDYnMjMuMiJF!5e0!3m2!1sru!2s!4v1646978641665!5m2!1sru!2s" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/about.js') }}" type="module"></script>
@endsection
