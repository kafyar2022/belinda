@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">Вакансии</h1>

    <div class="toolbar-holder">
      <form class="search-form">
        <input class="search-form__input" type="search" placeholder="Введите ключевое слово . . ." autocomplete="off">
      </form>
      <p class="output">{{ $data['vacancies']->count() }} вакансий</p>
      <button class="add-action">Добавить</button>
    </div>

    {!! session()->has('success') ? '<p class="success-msg">' . session()->get('success') . '</p>' : '' !!}
    {!! session()->has('fail') ? '<p class="fail-msg">' . session()->get('fail') . '</p>' : '' !!}
    
    <form class="form vacancy-add-form vacancy-add-form--hidden" action="{{ route('vacancies.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <p class="form__element form__element--wide">
        <label class="form__label" for="title">Заголовок</label>
        <input class="form__field" id="title" name="title" type="text" placeholder="Медицинский представитель" required>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Описание
          <textarea class="form__textarea" name="description" cols="30" rows="10" placeholder="Описание"></textarea>
        </label>
      </p>
      <p class="form__actions">
        <button class="form__submit" type="submit">Опубликовать</button> или
        <button class="form__reset" type="reset">очистить</button>
      </p>
      <button class="form__close" type="button">Закрыть</button>
    </form>

    <ul class="data-list">
      @foreach ($data['vacancies'] as $vacancy)
        <li class="data-list__item">
          <p class="data-list__title">{{ $vacancy->title }}</p>
          <a class="action action--edit" href="{{ route('vacancies.show', $vacancy->id) }}">{{ $vacancy->applications->count() }} заявок</a>
          <a class="action action--delete" href="{{ route('vacancies.activation', $vacancy->id) }}">{{ $vacancy->active ? 'Скрыть' : 'Опубликовать' }}</a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/carrier.js') }}" type="module"></script>
@endsection
