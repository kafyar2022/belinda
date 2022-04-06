<?php

namespace Database\Seeders;

use App\Models\Newslifestyle;
use Illuminate\Database\Seeder;

class NewslifestyleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1,30) as $key) {
      $table = new Newslifestyle();
      $table->title = 'Lorem ipsum dolor sit';
      $table->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius blanditiis dolorem amet iste molestiae quae quo obcaecati nemo minus, perspiciatis autem veritatis cum impedit.';
      $key % 2 == 0 ? $table->type = 'news' : $table->type = 'lifestyle';
      $table->save();
    }
  }
}
