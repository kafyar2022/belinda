<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory, SoftDeletes;

  protected $guarded = [];

  public function nosology()
  {
    return $this->belongsTo(Nosology::class, 'nosology_id');
  }

  public function classification()
  {
    return $this->belongsTo(Classification::class, 'classification_id');
  }
}
