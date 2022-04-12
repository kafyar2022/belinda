<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = array(
      array(
        'id' => 1,
        'page' => null,
        'caption' => 'phone',
        'text' => '+992 (918) 00-00-00'
      ),
      array(
        'id' => 2,
        'page' => null,
        'caption' => 'email',
        'text' => 'info@belinda.tj'
      ),
      array(
        'id' => 3,
        'page' => null,
        'caption' => 'copyright',
        'text' => '© 2010-2021 Belinda. Все права защищены'
      ),
      array(
        'id' => 4,
        'page' => 'home',
        'caption' => 'quote',
        'text' => 'Здоровье - вечная ценность'
      ),
      array(
        'id' => 5,
        'page' => 'home',
        'caption' => 'info',
        'text' => '«Белинда» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых. Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.
Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.
«Белинда» открывает свои двери для всех желающих приобрести международный опыт в области фармацевтики. Мы сторонники высокой кадровой политики компании, направленной на развитие команды амбициозных и талантливых профессионалов. Наша цель – создать комфортные и хорошие условия труда для всех и для каждого сотрудника.'
      ),
      array(
        'id' => 6,
        'page' => 'home',
        'caption' => 'about-title',
        'text' => 'О нас'
      ),
      array(
        'id' => 7,
        'page' => 'home',
        'caption' => 'about-text',
        'text' => 'Узнать больше о
Белинде'
      ),
      array(
        'id' => 8,
        'page' => 'home',
        'caption' => 'products-title',
        'text' => 'Наши продукты'
      ),
      array(
        'id' => 9,
        'page' => 'home',
        'caption' => 'products-text',
        'text' => 'Узнать больше о
наших продуктах'
      ),
      array(
        'id' => 10,
        'page' => 'home',
        'caption' => 'carrier-title',
        'text' => 'Карьера'
      ),
      array(
        'id' => 11,
        'page' => 'home',
        'caption' => 'carrier-text',
        'text' => 'Вакансии и
работа в компании'
      ),
      array(
        'id' => 12,
        'page' => 'home',
        'caption' => 'news-title',
        'text' => 'Новости компании'
      ),
      array(
        'id' => 13,
        'page' => 'home',
        'caption' => 'news-text',
        'text' => 'Самая популярная
новость компании'
      ),
      array(
        'id' => 14,
        'page' => 'home',
        'caption' => 'lifestyle-title',
        'text' => 'Образ жизни'
      ),

      array(
        'id' => 15,
        'page' => 'home',
        'caption' => 'lifestyle-text',
        'text' => 'Самая популярная статья
об образе жизни'
      ),
      array(
        'id' => 16,
        'page' => 'home',
        'caption' => 'attention-title',
        'text' => 'Внимание'
      ),
      array(
        'id' => 17,
        'page' => 'home',
        'caption' => 'attention-text',
        'text' => 'Информация, представленная на этом сайте, не должна использоваться для самодиагностики и лечения и не может служить заменой очной консультации с доктором.'
      ),
      array(
        'id' => 18,
        'page' => 'about',
        'caption' => 'about-title',
        'text' => 'О Белинде'
      ),
      array(
        'id' => 19,
        'page' => 'about',
        'caption' => 'about-text',
        'text' => '«Белинда» — одна из самых молодых компаний в мире международной фармакологии, которая была основана в 2001 году, но активно и успешно развивается с каждым днем, завоевывая доверие и уважение своих партнеров, а также привлекая новых.
        
Основной целью и стратегией компании является разработка новых и эффективных методов лечения различных заболеваний.

Мы котируемся на рынках Европы, Азии и стран СНГ. На данный момент мы сотрудничаем с более чем 75 агентами и партнерами из 9 разных стран. Наша компания также активно занимается продвижением фармацевтической продукции в сфере маркетинга. Мы стремимся к лучшему, сохраняя качество и высокие стандарты.

Таким образом, с большим потенциалом в области медицины, которая создает новые лекарства. Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов. Также мы следим за развитием фармацевтического рынка, достижениями в лечении различных заболеваний, а также новыми направлениями.'
      ),
      array(
        'id' => 20,
        'page' => 'about',
        'caption' => 'products-title',
        'text' => 'Все продукты'
      ),
      array(
        'id' => 21,
        'page' => 'about',
        'caption' => 'products-text',
        'text' => 'Узнайте больше
о наших продуктах'
      ),
      array(
        'id' => 22,
        'page' => 'about',
        'caption' => 'advantages-title',
        'text' => 'Наши преимущества'
      ),
      array(
        'id' => 23,
        'page' => 'about',
        'caption' => 'advantage-1',
        'text' => 'Эффективность'
      ),
      array(
        'id' => 24,
        'page' => 'about',
        'caption' => 'advantage-2',
        'text' => 'Инновации'
      ),
      array(
        'id' => 25,
        'page' => 'about',
        'caption' => 'advantage-3',
        'text' => 'Представление'
      ),
      array(
        'id' => 26,
        'page' => 'about',
        'caption' => 'advantage-4',
        'text' => 'Сотрудничество'
      ),
      array(
        'id' => 27,
        'page' => 'about',
        'caption' => 'advantage-5',
        'text' => 'Работа в команде'
      ),
      array(
        'id' => 28,
        'page' => 'about',
        'caption' => 'advantage-6',
        'text' => 'Компетентность'
      ),
      array(
        'id' => 29,
        'page' => 'about',
        'caption' => 'news-title',
        'text' => 'Новости компании'
      ),
      array(
        'id' => 30,
        'page' => 'about',
        'caption' => 'news-text',
        'text' => 'Актуальные и полезные
новости компании'
      ),
      array(
        'id' => 31,
        'page' => 'about',
        'caption' => 'principles-title-1',
        'text' => 'Принципы нашей работы:'
      ),
      array(
        'id' => 32,
        'page' => 'about',
        'caption' => 'principles-text-1',
        'text' => 'Профессионализм команды;
Обмен опытом и своими знаниями;
Инновации, импровизация и поиск оптимальных решений;
Проведение непрерывного обучения сотрудников компании;
Достижение максимальных результатов в кратчайшие сроки;
Оптимальное использование ресурсов;'
      ),
      array(
        'id' => 33,
        'page' => 'about',
        'caption' => 'principles-title-2',
        'text' => 'Партнерство:'
      ),
      array(
        'id' => 34,
        'page' => 'about',
        'caption' => 'principles-text-2',
        'text' => 'Понимание и доверие партнеров;
Оптимальное решение в достижении взаимовыгодного результата;'
      ),
      array(
        'id' => 35,
        'page' => 'about',
        'caption' => 'principles-title-3',
        'text' => 'Обязанность:'
      ),
      array(
        'id' => 36,
        'page' => 'about',
        'caption' => 'principles-text-3',
        'text' => 'Соблюдение принципов работы;
За качество товара потребителю;
За выполнение всех обязательств перед партнерами;'
      ),
      array(
        'id' => 37,
        'page' => 'about',
        'caption' => 'principles-title',
        'text' => 'Наши принципы'
      ),
      array(
        'id' => 38,
        'page' => 'about',
        'caption' => 'mission-vision-title',
        'text' => 'Наша миссия и видение'
      ),
      array(
        'id' => 39,
        'page' => 'about',
        'caption' => 'mission-vision-title-1',
        'text' => 'Видение'
      ),
      array(
        'id' => 40,
        'page' => 'about',
        'caption' => 'mission-vision-text-1',
        'text' => 'Девиз нашей компании – доступность, а главное качество лекарственных средств, которые являются основой наших продаж. За время существования нашей компании мы зарекомендовали себя как надежный партнер и создали дистрибьюторскую сеть фармацевтической продукции.'
      ),
      array(
        'id' => 41,
        'page' => 'about',
        'caption' => 'mission-vision-title-2',
        'text' => 'Миссия'
      ),
      array(
        'id' => 42,
        'page' => 'about',
        'caption' => 'mission-vision-text-2',
        'text' => 'Установление высоких стандартов качества, безопасности и доступности лекарственных средств для различных категорий населения независимо от уровня их доходов и Содействие процветанию здорового общества путем обеспечения пациентов качественными, безопасными и доступными лекарственными средствами.'
      ),
      array(
        'id' => 43,
        'page' => 'about',
        'caption' => 'mission-vision-title-3',
        'text' => 'Цель'
      ),
      array(
        'id' => 44,
        'page' => 'about',
        'caption' => 'mission-vision-text-3',
        'text' => 'Основной целью нашей компании является соответствие всем требованиям современного фармацевтического рынка, совершенствование методов современного лечения, медицинских услуг и производства необходимых лекарственных средств.'
      ),
      array(
        'id' => 45,
        'page' => 'about',
        'caption' => 'global-presence-title',
        'text' => 'Глобальное присутствие'
      ),
      array(
        'id' => 46,
        'page' => 'products',
        'caption' => 'belinda-products-title',
        'text' => 'Продукты Белинда',
      ),
      array(
        'id' => 47,
        'page' => 'products',
        'caption' => 'belinda-products-text',
        'text' => 'Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.',
      ),
      array(
        'id' => 48,
        'page' => 'products',
        'caption' => 'classification-title',
        'text' => 'АТХ классификация',
      ),
      array(
        'id' => 49,
        'page' => 'products',
        'caption' => 'nosology-title',
        'text' => 'Нозология',
      ),
      array(
        'id' => 50,
        'page' => 'products',
        'caption' => 'prescription',
        'text' => 'Тип',
      ),
      array(
        'id' => 51,
        'page' => 'products',
        'caption' => 'all-products',
        'text' => 'Все продукты',
      ),
      array(
        'id' => 52,
        'page' => null,
        'caption' => 'download-instructions',
        'text' => 'Скачать
инструкцию',
      ),
      array(
        'id' => 53,
        'page' => null,
        'caption' => 'composition',
        'text' => 'Состав',
      ),
      array(
        'id' => 54,
        'page' => null,
        'caption' => 'indications',
        'text' => 'Показания к применению',
      ),
      array(
        'id' => 55,
        'page' => null,
        'caption' => 'see',
        'text' => 'Посмотреть',
      ),
      array(
        'id' => 56,
        'page' => null,
        'caption' => 'mode',
        'text' => 'Способ применения',
      ),
      array(
        'id' => 57,
        'page' => null,
        'caption' => 'similar-products',
        'text' => 'Похожие продукты',
      ),
      array(
        'id' => 58,
        'page' => null,
        'caption' => 'popular-products-title',
        'text' => 'Популярные продукты',
      ),
      array(
        'id' => 59,
        'page' => null,
        'caption' => 'back-to-products',
        'text' => 'Назад ко всем продуктам',
      ),
      array(
        'id' => 60,
        'page' => 'carrier',
        'caption' => 'belinda-title',
        'text' => 'Продукты Белинда',
      ),
      array(
        'id' => 61,
        'page' => 'carrier',
        'caption' => 'belinda-text',
        'text' => 'Для производства мы используем только самые качественные лекарственные материалы и субстанции, при создании которых соблюдаем все необходимые принципы и правила производства и контроля качества, что обеспечивает гарантию и уверенность в качестве и эффективности нашей продукции для всех врачей и пациентов.',
      ),
      array(
        'id' => 62,
        'page' => 'carrier',
        'caption' => 'vacancies-title',
        'text' => 'Текущие вакансии',
      ),
      array(
        'id' => 63,
        'page' => 'carrier',
        'caption' => 'apply-now',
        'text' => 'Подать сейчас',
      ),
      array(
        'id' => 64,
        'page' => 'newslifestyle',
        'caption' => 'news-title',
        'text' => 'Новости компании',
      ),
      array(
        'id' => 65,
        'page' => 'newslifestyle',
        'caption' => 'lifestyle-title',
        'text' => 'Образ жизни',
      ),
      array(
        'id' => 66,
        'page' => 'newslifestyle',
        'caption' => 'company-news',
        'text' => 'Новости компании',
      ),
      array(
        'id' => 67,
        'page' => 'newslifestyle',
        'caption' => 'company-lifestyle',
        'text' => 'Образ жизни',
      ),
      array(
        'id' => 68,
        'page' => 'contacts',
        'caption' => 'contacts-title',
        'text' => 'Контактная информация',
      ),
      array(
        'id' => 69,
        'page' => 'contacts',
        'caption' => 'address-term',
        'text' => 'Адрес: ',
      ),
      array(
        'id' => 70,
        'page' => 'contacts',
        'caption' => 'address',
        'text' => 'ул. Каххорова 111, Душанбе, Таджикистан',
      ),
      array(
        'id' => 71,
        'page' => 'contacts',
        'caption' => 'tel-term',
        'text' => 'Тел: ',
      ),
      array(
        'id' => 72,
        'page' => 'contacts',
        'caption' => 'tel',
        'text' => '+992 (918) 00-00-00',
      ),
      array(
        'id' => 73,
        'page' => 'contacts',
        'caption' => 'email-term',
        'text' => 'E-mail: ',
      ),
      array(
        'id' => 74,
        'page' => 'contacts',
        'caption' => 'email',
        'text' => 'email',
      ),
      array(
        'id' => 75,
        'page' => 'contacts',
        'caption' => 'contact-us',
        'text' => 'Свяжитесь с нами через онлайн форму',
      ),
      array(
        'id' => 76,
        'page' => 'contacts',
        'caption' => 'form-name',
        'text' => 'Имя',
      ),
      array(
        'id' => 77,
        'page' => 'contacts',
        'caption' => 'form-email',
        'text' => 'Электронная почта',
      ),
      array(
        'id' => 78,
        'page' => 'contacts',
        'caption' => 'form-tel',
        'text' => 'Телефон',
      ),
      array(
        'id' => 79,
        'page' => 'contacts',
        'caption' => 'enter-msg',
        'text' => 'Введите ваше сообщение здесь...',
      ),
      array(
        'id' => 80,
        'page' => 'contacts',
        'caption' => 'form-aware',
        'text' => 'Нажимая кнопку отправить, вы соглашаетесь на обработку ваших персональных данных.',
      ),
      array(
        'id' => 81,
        'page' => 'contacts',
        'caption' => 'global-presence',
        'text' => 'Глобальное присутствие',
      ),
      array(
        'id' => 82,
        'page' => null,
        'caption' => 'address',
        'text' => 'ул. Каххорова 111, Душанбе, Таджикистан'
      ),
    );

    foreach ($texts as $text) {
      $table = new Text();
      $table->page = $text['page'];
      $table->caption = $text['caption'];
      $table->text = $text['text'];
      $table->save();
    }
  }
}
