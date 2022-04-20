@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">Новости и образ жизни</h1>

    <div class="toolbar-holder">
      <form class="search-form">
        <input class="search-form__input" type="search" placeholder="Введите ключевое слово . . ." autocomplete="off">
      </form>
      <button class="add-action">Добавить</button>
    </div>

    {!! session()->has('success') ? '<p class="success-msg">' . session()->get('success') . '</p>' : '' !!}
    {!! session()->has('fail') ? '<p class="fail-msg">' . session()->get('fail') . '</p>' : '' !!}

    <form class="form newslifestyle-add-form newslifestyle-add-form--hidden" action="{{ route('newslifestyle.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <p class="form__element">
        Картинка
        <img class="form__photo-preview" src="{{ asset('img/muffin-grey.svg') }}" data-src="{{ asset('img/muffin-grey.svg') }}" width="238" height="236" alt="Фото продукта">
        <input class="visually-hidden" name="img" id="img" type="file" accept="image/*">
        <label class="form__label form__label--file" for="img">Загрузить фото...</label>
      </p>
      <p class="form__element">
        <label class="form__label" for="title">Заголовок</label>
        <input class="form__field" id="title" name="title" type="text" placeholder="Заголовок" required>
      </p>
      <p class="form__element">
        <label class="form__label" for="type">Тип</label>
        <select class="form__field" name="type" id="type">
          <option value="news">Новость</option>
          <option value="lifestyle">Образ жизни</option>
        </select>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Описание
          <textarea class="form__textarea" name="description" cols="30" rows="10" placeholder="Новость или образ жизни"></textarea>
        </label>
      </p>
      <p class="form__actions">
        <button class="form__submit" type="submit">Опубликовать</button> или
        <button class="form__reset" type="reset">очистить</button>
      </p>
      <button class="form__close" type="button">Закрыть</button>
    </form>

    <ul class="data-list">
      @foreach ($data['newslifestyles'] as $newslifestyle)
        <li class="data-list__item">
          <p class="data-list__title">{{ $newslifestyle->title }}</p>
          <a class="action action--edit" href="{{ route('newslifestyle.edit', $newslifestyle->id) }}" type="button">Редактировать</a>
          <a class="action action--delete" href="{{ route('newslifestyle.delete') }}?id={{ $newslifestyle->id }}" type="button">Удалить</a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/newslifestyle.js') }}" type="module"></script>
@endsection
