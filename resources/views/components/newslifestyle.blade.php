@props(['newslifestyle'])

<figure class="newslifestyle-card">
  <div class="newslifestyle-card__inner">
    <h3 class="newslifestyle-card__title">{{ $newslifestyle->title }}</h3>
    <p class="newslifestyle-card__description">{{ $newslifestyle->description }}</p>
  </div>
  <img class="newslifestyle-card__img" src="{{asset('files/news/news.png')}}" alt="Новость">
  <a class="newslifestyle-card__link" href="{{route('newslifestyle.show', $newslifestyle->id)}}">Подробнее</a>
</figure>
