<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Seeder;

class SitesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $sites = array(
      array(
        'id' => 1,
        'title' => 'Таджикистан',
        'site' => 'www.belinda.tj',
        'url' => 'https://belinda.tj/',
      ),
      array(
        'id' => 2,
        'title' => 'Таджикистан',
        'site' => 'www.belinda.tj',
        'url' => 'https://belinda.tj/',
      ),
      array(
        'id' => 3,
        'title' => 'Таджикистан',
        'site' => 'www.belinda.tj',
        'url' => 'https://belinda.tj/',
      ),
      array(
        'id' => 4,
        'title' => 'Таджикистан',
        'site' => 'www.belinda.tj',
        'url' => 'https://belinda.tj/',
      ),
    );

    foreach ($sites as $site) {
      $table = new Site();
      $table->title = $site['title'];
      $table->site = $site['site'];
      $table->url = $site['url'];
      $table->save();
    }
  }
}
