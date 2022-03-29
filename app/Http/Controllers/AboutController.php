<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Site;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('about');
    $page['sites'] = Site::get();

    return view('pages.about.index', compact('page'));
  }
}
