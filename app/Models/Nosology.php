<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nosology extends Model
{
  use HasFactory, SoftDeletes;

  protected $guarded = [];

  public function products()
  {
    return $this->hasMany(Product::class, 'nosology_id');
  }
}