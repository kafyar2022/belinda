<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('home');

    return view('pages.home.index', compact('page'));
  }
}
