<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1,5) as $key) {
      $table = new Vacancy();
      $table->title = 'Медицинский представитель';
      $table->description = 'Опыт успешных фармацевтических продаж от 1 года 0,00), тимолола малеата 6.83 мг (эквивалентно тимололу 5,00 мг) вспомогательные вещества: маннитол, натрия цитрат, гидроксиэтилцеллюлоза (натрозол НХ 250), натрия гидроксида 1 М раствор до рН 5,65, бензалкония хлорид 50 % раствор, натрия гидроксида 1 М раствор до рН 5,5-5,8, вода для инъекций.';
      $table->save();
    }
  }
}
