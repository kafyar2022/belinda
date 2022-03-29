<?php

/**
 * Custom helper class
 * @author Ikrom Rahimov fleck97rgb@gmail.com
 */

namespace App\Helpers;

use App\Models\Button;
use App\Models\Text;
use stdClass;

class Helper
{
  public static function getPage($pageName)
  {
    $page = [];

    $texts = Text::where('page', $pageName)->get();

    foreach ($texts as $text) {
      $page[$text->caption] = $text->text;
    }

    return $page;
  }

  public static function getApp()
  {
    $app = [];

    $texts = Text::where('page', null)->get();

    foreach ($texts as $text) {
      $app[$text->caption] = $text->text;
    }

    return $app;
  }
}
