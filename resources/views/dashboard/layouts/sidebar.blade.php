<aside class="sidebar">
  <nav class="main-navigation">
    <ul class="page-navigation">
      <li class="page-navigation-item">
        <a class="page-navigation-link home" target="_blank" href="{{ route('home') }}">Главная</a>
      </li>
      <li class="page-navigation-item">
        <a class="page-navigation-link products" href="{{ route('dashboard') }}">Продукты</a>
      </li>
      <li class="page-navigation-item">
        <a class="page-navigation-link news" href="{{ route('dashboard.news') }}">Новости</a>
      </li>
      <li class="page-navigation-item">
        <a class="page-navigation-link logout" href="{{ route('auth.logout') }}">Выход</a>
      </li>
    </ul>
  </nav>
</aside>
