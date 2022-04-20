@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">{{ $newslifestyle->title }}</h1>

    {!! session()->has('success') ? '<p class="success-msg">' . session()->get('success') . '</p>' : '' !!}
    {!! session()->has('fail') ? '<p class="fail-msg">' . session()->get('fail') . '</p>' : '' !!}

    <form class="form newslifestyle-add-form" action="{{ route('newslifestyle.update') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{ $newslifestyle->id }}">
      <p class="form__element">
        Картинка
        <img class="form__photo-preview" src="{{ asset('files/newslifestyles/' . $newslifestyle->img) }}" data-src="{{ asset('img/muffin-grey.svg') }}" width="238" height="236" alt="Фото продукта">
        <input class="visually-hidden" name="img" id="img" type="file" accept="image/*">
        <label class="form__label form__label--file" for="img">Редактировать фото</label>
      </p>
      <p class="form__element">
        <label class="form__label" for="title">Заголовок</label>
        <input class="form__field" id="title" name="title" type="text" placeholder="Заголовок" value="{{ $newslifestyle->title }}" required>
      </p>
      <p class="form__element">
        <label class="form__label" for="type">Тип</label>
        <select class="form__field" name="type" id="type">
          <option value="news" {{ $newslifestyle->type == 'news' ? 'selected' : '' }}>Новость</option>
          <option value="lifestyle" {{ $newslifestyle->type == 'lifestyle' ? 'selected' : '' }}>Образ жизни</option>
        </select>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Описание
          <textarea class="form__textarea" name="description" cols="30" rows="10" placeholder="Новость или образ жизни">{{ $newslifestyle->description }}</textarea>
        </label>
      </p>
      <p class="form__actions">
        <button class="form__submit" type="submit">Редактировать</button> или
        <a class="form__reset" href="{{ route('dashboard.newslifestyle') }}">вернуться назад</a>
      </p>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/newslifestyle-show.js') }}" type="module"></script>
@endsection
