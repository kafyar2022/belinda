<?php

namespace Database\Seeders;

use App\Models\User;
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
    User::create([
      'name' => 'Administration',
      'login' => 'belinda@admin.tj',
      'role' => 'admin',
      'password' => bcrypt('12345'),
    ]);

    $this->call([
      TextSeeder::class,
      SitesSeeder::class,
      ProductsSeeder::class,
      ClassificationSeeder::class,
      NosologySeeder::class,
      VacancySeeder::class,
      NewslifestyleSeeder::class,
      ApplicationSeeder::class,
    ]);
  }
}
