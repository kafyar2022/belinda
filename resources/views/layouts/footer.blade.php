<footer class="footer">
  <dl class="footer-navigation">
    <div class="footer-navigation-item">
      <dt>Сайты компании</dt>
      <dd><a href="https://tj.cerebral.pro/">Церебрал®</a></dd>
      <dd><a href="https://ru.lambrotin.com/">Ламбротин®</a></dd>
      <dd><a href="https://lindavit.tj/">Линдавит®</a></dd>
      <dd><a href="https://ru.acemagnil.com/">Ацемагнил®</a></dd>
    </div>
    <div class="footer-navigation-item">
      <dt>Меню</dt>
      <dd><a href="{{ route('home.index') }}">Главная страница</a></dd>
      <dd><a href="{{ route('about.index') }}">О нас</a></dd>
      <dd><a href="{{ route('products.index') }}">Продукты</a></dd>
      <dd><a href="{{ route('carrier.index') }}">Карьера</a></dd>
      <dd><a href="{{ route('newslifestyle.index') }}">Новости и образ жизни</a></dd>
      <dd><a href="{{ route('contacts.index') }}">Контакты</a></dd>
    </div>
    <div class="footer-navigation-item">
      <dt>Популярные продукты</dt>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
    </div>
    <div class="footer-navigation-item">
      <dt>Популярные категории</dt>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
    </div>
    <div class="footer-navigation-item">
      <dt>Новости и образ жизни</dt>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
      <dd><a href="">Образец текста</a></dd>
    </div>
  </dl>

  <section class="contacts-card">
    <h2>Контакты</h2>
    <dl>
      <div class="contacts-card-item">
        <dt>Адрес: </dt>
        <dd><a href="http://maps.google.com/?q=38.542405,68.773123'" class="address" target="_blank">ул. Каххорова 111, Душанбе, Таджикистан</a></dd>
      </div>
      <div class="contacts-card-item">
        <dt>Тел: </dt>
        <dd><a href="tel:+992918000000">+992 (918) 00-00-00</a></dd>
      </div>
      <div class="contacts-card-item">
        <dt>E-mail: </dt>
        <dd><a href="mailto:info@belinda.tj.com">info@belinda.tj.com</a></dd>
      </div>
    </dl>
    <ul class="socials">
      <li><a href="#" class="socials-link"><img src="{{asset('files/instagram.svg')}}" alt="Инстаграм"></a></li>
      <li><a href="#" class="socials-link"><img src="{{asset('files/facebook.svg')}}" alt="Фейсбук"></a></li>
    </ul>
  </section>

  <div class="copyright-wrapper">
    <div class="logo-wrapper">
      <img class="main-logo" src="{{ asset('img/main-logo.svg') }}" alt="Логотип компании Belinda">
    </div>
    <p class="copyright">© 2010-2021 Belinda. Все права защищены</p>
  </div>
</footer>
