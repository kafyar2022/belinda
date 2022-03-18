@extends('layouts.master')

@section('title', 'Карьера')

@section('content')
  <main class="apply apply--hidden">
    <h2 class="apply__title sample-title">Подать заявку</h2>
    <form class="apply-form sample-wrapper sample-wrapper--dark">
      @csrf
      <fieldset class="apply-form__group">
        <legend class="apply-form__title sample-wrapper__title sample-wrapper__title--big">Медицинский представитель</legend>
        <p class="apply-form__item">
          <label class="visually-hidden" for="name">Имя</label>
          <input class="apply-form__input" type="text" name="name" id="name" placeholder="Имя">
        </p>
        <p class="apply-form__item">
          <label for="email" class="visually-hidden">Электронная почта</label>
          <input type="email" class="apply-form__input" name="email" id="email" placeholder="E-mail">
        </p>
        <p class="apply-form__item">
          <label for="phone" class="visually-hidden">Телефон</label>
          <input type="tel" class="apply-form__input" id="phone" name="phone" placeholder="Телефон">
        </p>
        <p class="apply-form__item">
          <label for="message" class="visually-hidden">Почему мы должны выбрать вас</label>
          <textarea class="apply-form__textarea" name="message" id="message" placeholder="Почему мы должны выбрать вас"></textarea>
          <i class="apply-form__textarea-limit">140 букв</i>
        </p>
      </fieldset>
      <div class="apply-form__footer">
        <label for="cv" class="apply-form__file-label">Закрепить резюме</label>
        <input type="file" id="cv" class="visually-hidden">
        <button class="apply-form__submit-btn red-link" type="submit">Отправить</button>
        <p class="apply-form__aware">Нажимая кнопку отправить, вы соглашаетесь на
обработку ваших персональных данных.</p>
      </div>
    </form>
  </main>
@endsection

@section('name')
  <script src="{{ asset('js/carrier.js') }}" type="module"></script>
@endsection
