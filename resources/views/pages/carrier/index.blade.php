@extends('layouts.master')

@section('title', 'Карьера')

@section('content')
  <main class="carrier-page">
    <section class="carrier-page__info">
      <div class="sample-wrapper sample-wrapper--dark">
        <h2 class="sample-wrapper__title sample-wrapper__title--big">{{ $page['belinda-title'] }}</h2>
        <p>{{ $page['belinda-text'] }}</p>
      </div>
    </section>

    <section class="vacancies">
      <h2 class="vacancies__title sample-title">{{$page['vacancies-title']}}</h2>
      @if ($page['vacancies']->count() == 0)
      <p class="no-vacancy">Текущих вакансий нет, но вы можете отправить нам свое резюме: <a class="no-vacancy__link">hr@belinda.uk.com</a></p>          
      @else
        <dl class="accordion" data-type="accordion">
          @foreach ($page['vacancies'] as $vacancy)
            <dt class="accordion__head accordion__head--hidden">
              <div class="sample-description-term">
                <p class="sample-description-term__title">{{$vacancy->title}}</p>
                <p class="sample-description-term__subtitle">{{$vacancy->description}}</p>
                <button class="sample-description-term__button dropdown-icon">Посмотреть</button>
              </div>
            </dt>
            <dd class="accordion__body">
              <div class="sample-description-definition">{{$vacancy->description}}</div>
              <a class="vacancies__link red-link" href="{{ route('carrier.apply', $vacancy->slug) }}">{{$page['apply-now']}}</a>
            </dd>
          @endforeach
        </dl>
        @endif
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/carrier.js') }}" type="module"></script>
@endsection
