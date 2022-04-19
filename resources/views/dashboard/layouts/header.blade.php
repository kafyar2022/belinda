<header class="main-header">
  <nav class="main-navigation">
    <a class="main-logo" target="_blank" href="{{ route('home.index') }}">
      <img src="{{ asset('img/main-logo.svg') }}" alt="Belinda Laboratories">
    </a>

    <ul class="page-navigation">
      <li class="page-navigation__item">
        <a class="page-navigation__link {{ $route === 'dashboard.products' || $route === 'products.edit' ? 'current' : '' }}" href="{{ route('dashboard.products') }}">Продукты</a>
      </li>
      <li class="page-navigation__item">
        <a class="page-navigation__link {{ $route === 'dashboard.newslifestyle' ? 'current' : '' }}" href="{{ route('dashboard.newslifestyle') }}">Новости и образ жизни</a>
      </li>
      <li class="page-navigation__item">
        <a class="page-navigation__link {{ $route === 'dashboard.carrier' ? 'current' : '' }}" href="{{ route('dashboard.carrier') }}">Карьера</a>
      </li>
    </ul>

    <a class="logout-link" href="{{ route('auth.logout') }}">Выход</a>
  </nav>
</header>
