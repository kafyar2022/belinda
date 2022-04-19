@extends('dashboard.layouts.master')

@section('content')
  <main class="container">
    <h1 class="page-title">{{ $product->title }}</h1>
    {!! session()->has('success') ? '<p class="success-msg">' . session()->get('success') . '</p>' : '' !!}
    {!! session()->has('fail') ? '<p class="fail-msg">' . session()->get('fail') . '</p>' : '' !!}
    <form class="form product-add-form" action="{{ route('products.update') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{ $product->id }}">
      <p class="form__element">
        <label class="form__label" for="title">Название продукта</label>
        <input class="form__field" id="title" name="title" type="text" value="{{ $product->title }}" required>
      </p>
      <p class="form__element">
        <label class="form__label" for="nosology">Носология</label>
        <select class="form__field" name="nosology_id" id="nosology">
          @foreach ($data['nosology'] as $nosology)
            <option value="{{ $nosology->id }}" {{ $product->nosology_id == $nosology->id ? 'selected' : '' }}>{{ $nosology->title }}</option>
          @endforeach
        </select>
      </p>
      <p class="form__element">
        <label class="form__label" for="classification">АТХ классификация</label>
        <select class="form__field" name="classification_id" id="classification">
          @foreach ($data['classification'] as $classification)
            <option value="{{ $classification->id }}" {{ $product->classification_id == $classification->id ? 'selected' : '' }}>{{ $classification->title }}</option>
          @endforeach
        </select>
      </p>
      <p class="form__element">
        <label class="form__label" for="prescription">Тип</label>
        <select class="form__field" name="prescription" id="prescription">
          <option {{ $product->prescription == 'ОТС' ? 'selected' : '' }}>ОТС</option>
          <option {{ $product->prescription == 'RX' ? 'selected' : '' }}>RX</option>
          <option {{ $product->prescription == 'BAD' ? 'selected' : '' }}>BAD</option>
        </select>
      </p>
      <p class="form__element">
        Инструкция
        <input class="visually-hidden" name="instruction" id="instruction" type="file">
        <label class="form__label form__label--file" for="instruction">{{ $product->instruction ? $product->instruction : 'Загрузить инструкцию' }}</label>
      </p>
      <p class="form__element">
        Фото продукта
        <img class="form__photo-preview" src="{{ asset('files/products/img/' . $product->photo) }}" width="238" height="236" alt="Фото продукта">
        <input class="visually-hidden" name="photo" id="photo" type="file" accept="image/*">
        <label class="form__label form__label--file" for="photo">Редактировать фото</label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Описание
          <textarea class="form__textarea" name="description" cols="30" rows="10">{{ $product->description }}</textarea>
        </label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Состав
          <textarea class="form__textarea" name="composition" cols="30" rows="10">{{ $product->composition }}</textarea>
        </label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Показания к применению
          <textarea class="form__textarea" name="indications" cols="30" rows="10">{{ $product->indications }}</textarea>
        </label>
      </p>
      <p class="form__element form__element--wide form__element--long">
        <label class="form__label form__label--textarea">
          Способ применения
          <textarea class="form__textarea" name="mode" cols="30" rows="10">{{ $product->mode }}</textarea>
        </label>
      </p>
      <p class="form__actions">
        <button class="form__submit" type="submit">Редактировать</button> или
        <a href="{{ route('dashboard.products') }}">вернуться назад</a>
      </p>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/products-show.js') }}" type="module"></script>
@endsection
