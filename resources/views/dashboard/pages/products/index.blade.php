@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">Продукты Belinda</h1>

    <div class="toolbar-holder">
      <form class="search-form">
        <input class="search-form__input" type="search" placeholder="Введите ключевое слово . . ." autocomplete="off">
      </form>
      <p class="output">{{ $data['products']->count() }} продуктов</p>
      <button class="add-action">Добавить</button>
    </div>

    {!! session()->has('success') ? '<p class="success-msg">' .  session()->get('success') . '</p>' : '' !!}
    {!! session()->has('fail') ? '<p class="fail-msg">' .  session()->get('fail') . '</p>' : '' !!}

    <form class="form product-add-form product-add-form--hidden" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <p class="form__element">
        <label class="form__label" for="title">Название продукта</label>
        <input class="form__field" id="title" name="title" type="text" placeholder="Авторекс-А" required>
      </p>
      <p class="form__element">
        <label class="form__label" for="nosology">Носология</label>
        <select class="form__field" name="nosology_id" id="nosology">
          @foreach ($data['nosology'] as $nosology)
            <option value="{{ $nosology->id }}">{{ $nosology->title }}</option>
          @endforeach
        </select>
      </p>
      <p class="form__element">
        <label class="form__label" for="classification">АТХ классификация</label>
        <select class="form__field" name="classification_id" id="classification">
          @foreach ($data['classification'] as $classification)
            <option value="{{ $classification->id }}">{{ $classification->title }}</option>
          @endforeach
        </select>
      </p>
      <p class="form__element">
        <label class="form__label" for="prescription">Тип</label>
        <select class="form__field" name="prescription" id="prescription">
          <option>ОТС</option>
          <option>RX</option>
          <option>BAD</option>
        </select>
      </p>
      <p class="form__element">
        Инструкция
        <input class="visually-hidden" name="instruction" id="instruction" type="file">
        <label class="form__label form__label--file" for="instruction">Загрузить инструкцию</label>
      </p>
      <p class="form__element">
        Фото продукта
        <img class="form__photo-preview" src="{{ asset('img/muffin-grey.svg') }}" data-src="{{ asset('img/muffin-grey.svg') }}" width="238" height="236" alt="Фото продукта">
        <input class="visually-hidden" name="photo" id="photo" type="file" accept="image/*">
        <label class="form__label form__label--file" for="photo">Загрузить фото...</label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Описание
          <textarea class="form__textarea" name="description" cols="30" rows="10" placeholder="Авторекс А — комбинированный препарат, эффект которого обусловлен действием двух компонентов — бета1-адреноблокатора (атенолол) и БМКК (амлодипин), оказывает гипотензивное, антиангинальное, антиаритмическое действие."></textarea>
        </label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Состав
          <textarea class="form__textarea" name="composition" cols="30" rows="10" placeholder="каждая таблетка содержит:
Амлодипин 5 мг;
( в виде Амлодипина бесилата BP)
Атенолол BP 50 мг;
Вспомогательные вещества q.s.
Использованы утвержденные красители."></textarea>
        </label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Показания к применению
          <textarea class="form__textarea" name="indications" cols="30" rows="10" placeholder="Со стороны сердечно-сосудистой системы: сердечная недостаточность, нарушение AV проводимости, брадикардия,
выраженное снижение АД, сердцебиение, одышка, приливы крови к коже лица."></textarea>
        </label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Способ применения
          <textarea class="form__textarea" name="mode" cols="30" rows="10" placeholder="Внутрь, запивая необходимым количеством жидкости.
При артериальной гипертензии и стенокардии доза составляет 1 таблетка в сутки.
При необходимости суточная доза может быть увеличена до 2 таблеток в сутки"></textarea>
        </label>
      </p>
      <p class="form__actions">
        <button class="form__submit" type="submit">Опубликовать</button> или
        <button class="form__reset" type="reset">очистить</button>
      </p>
      <button class="form__close" type="button">Закрыть</button>
    </form>

    <ul class="data-list">
      @foreach ($data['products'] as $product)
        <li class="data-list__item">
          <p class="data-list__title">{{ $product->title }}</p>
          <a class="action action--edit" href="{{ route('products.edit', $product->id) }}" type="button">Редактировать</a>
          <a class="action action--delete" href="{{ route('products.delete') }}?id={{ $product->id }}" type="button">Удалить</a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/products.js') }}" type="module"></script>
@endsection
