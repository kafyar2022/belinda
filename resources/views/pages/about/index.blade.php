@extends('layouts.master')

@section('title', 'О нас')

@section('content')
  <main class="about-page">
    <div class="about-page__left-column">
      <section class="about-page__about-belinda sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">О Белинде</h2>
        <p>«Белинда» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых.</p>
        <p>Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.</p>
        <p>Мы котируемся на рынках Европы, Азии и стран СНГ. На данный момент мы сотрудничаем с более чем 75 агентами и партнерами из 9 разных стран. Наша компания также активно занимается продвижением фармацевтической продукции в сфере маркетинга. Мы стремимся к лучшему, сохраняя качество и высокие стандарты.</p>
        <p>Таким образом, с большим потенциалом в области медицины, которая создает новые лекарства. Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов. Также мы следим за развитием фармацевтического рынка, достижениями в лечении различных заболеваний, а также новыми направлениями.</p>
      </section>

      <a class="about-page__products pretty-link" href="{{ route('products.index') }}" class="all-products-link">
        <div class="about-page__products-inner pretty-link__inner">
          <h3 class="pretty-link__title">Все продукты</h3>
          <p class="pretty-link__text">Узнайте больше
о наших продуктах</p>
        </div>
      </a>

      <section class="advantages">
        <h2 class="advantages__title sample-title">Наши преимущества</h2>
        <ul class="advantages-list">
          <li class="advantage-item">Эффективность</li>
          <li class="advantage-item">Инновации</li>
          <li class="advantage-item">Представление</li>
          <li class="advantage-item">Сотрудничество</li>
          <li class="advantage-item">Работа в команде</li>
          <li class="advantage-item">Компетентность</li>
        </ul>
      </section>
    </div>

    <div class="about-page__right-column">
      <a class="about-page__news pretty-link" href="{{ route('newslifestyle.index') }}">
        <div class="about-page__news-inner pretty-link__inner">
          <h3 class="pretty-link__title">Новости компании</h3>
          <p class="pretty-link__text">Актуальные и полезные
новости компании</p>
        </div>
      </a>

      <section class="principles sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">Наши принципы</h2>
        <dl>
          <div class="principle-item">
            <dt>Принципы нашей работы:</dt>
            <dd>Профессионализм команды;</dd>
            <dd>Обмен опытом и своими знаниями;</dd>
            <dd>Инновации, импровизация и поиск оптимальных решений;</dd>
            <dd>Проведение непрерывного обучения сотрудников компании;</dd>
            <dd>Достижение максимальных результатов в кратчайшие сроки;</dd>
            <dd>Оптимальное использование ресурсов;</dd>
          </div>
          <div class="principle-item">
            <dt>Партнерство:</dt>
            <dd>Понимание и доверие партнеров;</dd>
            <dd>Оптимальное решение в достижении взаимовыгодного результата;</dd>
          </div>
          <div class="principle-item">
            <dt>Обязанность:</dt>
            <dd>Соблюдение принципов работы;</dd>
            <dd>За качество товара потребителю;</dd>
            <dd>За выполнение всех обязательств перед партнерами;</dd>
          </div>
        </dl>
      </section>

      <section class="mission-vision">
        <h2 class="mission-vision__title sample-title">Наша миссия и видение</h2>
        <ul class="mission-vision-list">
          <li class="mission-vision-item sample-wrapper">
            <h3 class="sample-wrapper__title">Видение</h3>
            <p>Девиз нашей компании – доступность, а главное качество лекарственных средств, которые являются основой наших продаж. За время существования нашей компании мы зарекомендовали себя как надежный партнер и создали дистрибьюторскую сеть фармацевтической продукции.</p>
          </li>
          <li class="mission-vision-item sample-wrapper">
            <h3 class="sample-wrapper__title">Миссия</h3>
            <p>Установление высоких стандартов качества, безопасности и доступности лекарственных средств для различных категорий населения независимо от уровня их доходов и Содействие процветанию здорового общества путем обеспечения пациентов качественными, безопасными и доступными лекарственными средствами.</p>
          </li>
          <li class="mission-vision-item sample-wrapper">
            <h3 class="sample-wrapper__title">Цель</h3>
            <p>The main aim of our company is compliance with all the requirements of modern pharmaceutical market, improving methods of modern treatment, medical services and production of needed drugs.</p>
          </li>
        </ul>
      </section>
    </div>

    <section class="global-presence">
      <h2 class="global-presence__title sample-title">Глобальное присутствие</h2>
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
