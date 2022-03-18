@extends('layouts.master')

@section('title', 'Карьера')

@section('content')
  <main class="apply apply--hidden">
    <h2 class="apply__title sample-title">Подать заявку</h2>
    <form class="form sample-wrapper sample-wrapper--dark">
      @csrf
      <fieldset class="form__group">
        <legend class="form__title sample-wrapper__title sample-wrapper__title--big">Медицинский представитель</legend>
        <p class="form__item">
          <label class="visually-hidden" for="name">Имя</label>
          <input class="form__input" type="text" name="name" id="name" placeholder="Имя">
        </p>
        <p class="form__item">
          <label for="email" class="visually-hidden">Электронная почта</label>
          <input type="email" class="form__input" name="email" id="email" placeholder="E-mail">
        </p>
        <p class="form__item">
          <label for="phone" class="visually-hidden">Телефон</label>
          <input type="tel" class="form__input" id="phone" name="phone" placeholder="Телефон">
        </p>
        <p class="form__item">
          <label for="message" class="visually-hidden">Почему мы должны выбрать вас</label>
          <textarea class="form__textarea" name="message" id="message" placeholder="Почему мы должны выбрать вас"></textarea>
          <i class="form__textarea-limit">140 букв</i>
        </p>
      </fieldset>
      <div class="form__footer">
        <label for="cv" class="form__file-label">Закрепить резюме</label>
        <input type="file" id="cv" class="visually-hidden">
        <button class="form__submit-btn red-link" type="submit">Отправить</button>
        <p class="form__aware">Нажимая кнопку отправить, вы соглашаетесь на
обработку ваших персональных данных.</p>
      </div>
    </form>
  </main>
@endsection

@section('name')
  <script src="{{ asset('js/carrier.js') }}" type="module"></script>
@endsection
