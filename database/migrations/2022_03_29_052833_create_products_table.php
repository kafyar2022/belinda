<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->integer('nosology_id')->nullable();
      $table->integer('classification_id')->nullable();
      $table->string('title');
      $table->string('prescription');
      $table->text('description');
      $table->text('composition')->default('...');
      $table->text('indications')->default('...');
      $table->text('mode')->default('...');
      $table->string('picture');
      $table->string('filename')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('products');
  }
}
