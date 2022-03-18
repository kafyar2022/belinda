@extends('layouts.master')

@section('title', 'Карьера')

@section('content')
  <main class="carrier-page">
    <section class="carrier-page__info">
      <div class="sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">Продукты Белинда</h2>
        <p>Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.</p>
      </div>
    </section>

    <section class="vacancies">
      <h2 class="vacancies__title sample-title">Текущие вакансии</h2>
      {{-- <p class="no-vacancy">Текущих вакансий нет,
но вы можете отправить нам свое резюме: <a class="no-vacancy__link">hr@belinda.uk.com</a></p> --}}
      <dl class="accordion" data-type="accordion">
        @foreach (range(1, 6) as $key)
          <dt class="accordion__head accordion__head--hidden">
            <div class="sample-description-term">
              <p class="sample-description-term__title">Медицинский представитель</p>
              <p class="sample-description-term__subtitle">Опыт успешных фармацевтических продаж от 1 года</p>
              <button class="sample-description-term__button dropdown-icon">Посмотреть</button>
            </div>
          </dt>
          <dd class="accordion__body">
            <div class="sample-description-definition">активные вещества: дорзоламида гидрохлорида 22,26 (эквивалентно дорзоламиду 20,00), тимолола малеата 6.83 мг (эквивалентно тимололу 5,00 мг) вспомогательные вещества: маннитол, натрия цитрат, гидроксиэтилцеллюлоза (натрозол НХ 250), натрия гидроксида 1 М раствор до рН 5,65, бензалкония хлорид 50 % раствор, натрия гидроксида 1 М раствор до рН 5,5-5,8, вода для инъекций.</div>
            <a class="vacancies__link red-link" href="{{ route('carrier.apply') }}">Подать сейчас</a>
          </dd>
        @endforeach
      </dl>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/carrier.js') }}" type="module"></script>
@endsection
