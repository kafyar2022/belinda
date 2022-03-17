<header class="header">
  <nav class="main-navigation">
    <a href="{{ route('home.index') }}">
      <img class="main-logo" src="{{ asset('img/main-logo.svg') }}" alt="Логотип компании Belinda">
    </a>
    <dl class="menu">
      <dt>
        <div class="menu-icon"><i></i><i></i><i></i></div>
        <button class="menu-button" type="button">Меню</button>
      </dt>
      <dd><a class="main-navigation-link {{ $route === 'about.index' ? 'current' : '' }}" href="{{ route('about.index') }}">О нас</a></dd>
      <dd><a class="main-navigation-link {{ $route === 'products.index' || $route === 'products.show' ? 'current' : '' }}" href="{{ route('products.index') }}">Продукты</a></dd>
      <dd><a class="main-navigation-link {{ $route === 'carrier.index' ? 'current' : '' }}" href="{{ route('carrier.index') }}">Карьера</a></dd>
      <dd><a class="main-navigation-link {{ $route === 'newslifestyle.index' || $route === 'newslifestyle.show' ? 'current' : '' }}" href="{{ route('newslifestyle.index') }}">Новости и образ жизни</a></dd>
      <dd><a class="main-navigation-link {{ $route === 'contacts.index' ? 'current' : '' }}" href="{{ route('contacts.index') }}">Контакты</a></dd>
    </dl>
    <a href="{{ route('products.index') }}">Продукты</a>
  </nav>
  <div class="search-container">
    <form action="#" method="get" class="search-form">
      @csrf
      <label class="search-label">
        <input type="search" class="search-input" name="keyword" placeholder="Введите ключевые слова для поиска">
      </label>
    </form>
  </div>
</header>
