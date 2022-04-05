<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      TextSeeder::class,
      SitesSeeder::class,
      ProductsSeeder::class,
      ClassificationSeeder::class,
      NosologySeeder::class,
      VacancySeeder::class,
    ]);
  }
}
