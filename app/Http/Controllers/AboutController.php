<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('about');

    return view('pages.about.index', compact('page'));
  }
}
