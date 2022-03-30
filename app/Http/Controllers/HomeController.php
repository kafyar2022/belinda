<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('home');
    $page['products'] = Product::orderBy('title')->take(9)->get();

    return view('pages.home.index', compact('page'));
  }
}
