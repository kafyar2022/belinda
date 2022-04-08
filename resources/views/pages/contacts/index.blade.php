@extends('layouts.master')

@section('title', 'Контакты')

@section('content')
  <main class="contacts-page">
    <div class="contacts-vitrin">
      <section class="contacts-card">
        <h2>{{ $page['contacts-title'] }}</h2>
        <dl>
          <div class="contacts-card-item">
            <dt>{{ $page['address-term'] }}</dt>
            <dd><a href="http://maps.google.com/?q=38.542405,68.773123'" class="address" target="_blank">{{ $page['address'] }}</a></dd>
          </div>
          <div class="contacts-card-item">
            <dt>{{ $page['tel-term'] }}</dt>
            <dd><a href="tel:+992918000000">{{ $page['tel'] }}</a></dd>
          </div>
          <div class="contacts-card-item">
            <dt>{{ $page['email-term'] }}</dt>
            <dd><a href="mailto:info@belinda.tj.com">{{ $page['email'] }}</a></dd>
          </div>
        </dl>
        <ul class="socials">
          <li><a href="#" class="socials-link"><img src="{{ asset('files/instagram.svg') }}" alt="Инстаграм"></a></li>
          <li><a href="#" class="socials-link"><img src="{{ asset('files/facebook.svg') }}" alt="Фейсбук"></a></li>
        </ul>
      </section>

      <form class="form sample-wrapper sample-wrapper--dark">
        @csrf
        <fieldset class="form__group">
          <legend class="form__title sample-wrapper__title sample-wrapper__title--big">{{ $page['contact-us'] }}</legend>
          <p class="form__item">
            <label class="visually-hidden" for="name">{{ $page['form-name'] }}</label>
            <input
              class="form__input"
              id="name"
              type="text"
              name="name"
              placeholder="Имя"
              required
              data-pristine-required-message="Объязательное поле"
            >
          </p>
          <p class="form__item">
            <label for="email" class="visually-hidden">{{ $page['form-email'] }}</label>
            <input
              class="form__input"
              type="email"
              name="email"
              id="email"
              placeholder="E-mail"
              required
              data-pristine-required-message="Объязательное поле"
              data-pristine-email-message="E-mail не является допустимым"
            >
          </p>
          <p class="form__item">
            <label for="phone" class="visually-hidden">{{ $page['form-tel'] }}</label>
            <input
              class="form__input"
              type="tel"
              id="phone"
              name="phone"
              placeholder="Телефон"
              required
              data-pristine-required-message="Объязательное поле"
            >
          </p>
          <p class="form__item">
            <label for="message" class="visually-hidden">{{ $page['enter-msg'] }}</label>
            <textarea
              class="form__textarea"
              name="message"
              id="message"
              placeholder="{{ $page['enter-msg'] }}"
              required
              data-pristine-required-message="Объязательное поле"
            ></textarea>
          </p>
        </fieldset>
        <div class="form__footer">
          <p class="form__aware">{{ $page['form-aware'] }}</p>
          <button class="form__submit-btn red-link" style="margin-left: 32px" type="submit">Отправить</button>
        </div>
      </form>
    </div>

    <div class="contacts-page map-wrapper" style="height: 600px">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3120.625289276977!2d68.7709343153399!3d38.54240497962693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x954badaf300d3859!2zMzjCsDMyJzMyLjciTiA2OMKwNDYnMjMuMiJF!5e0!3m2!1sru!2s!4v1646978641665!5m2!1sru!2s" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section class="global-presence">
      <h2 class="global-presence__title sample-title">{{ $page['global-presence'] }}</h2>
      <div class="global-presence__carousel">
        <div class="glide" data-type="carousel">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach ($page['sites'] as $site)
                <li class="glide__slide">
                  <a class="site-item sample-wrapper" href="{{ $site->site }}" target="_blank">
                    <div class="site-item__inner">
                      <h3 class="sample-wrapper__title">{{ $site->title }}</h3>
                      <cite class="site-item__url">{{ $site->site }}</cite>
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
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/contacts.js') }}" type="module"></script>
@endsection
