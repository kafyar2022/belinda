<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
  use HasFactory, SoftDeletes, Sluggable;

  protected $guarded = [];

  public function applications()
  {
    return $this->hasMany(Application::class, 'vacancy_id');
  }

  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
}
