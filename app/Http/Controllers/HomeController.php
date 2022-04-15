<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Newslifestyle;
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

  public function search(Request $request)
  {
    $result['products'] = Product::select('title', 'slug')->where('title', 'like', '%' . $request->keyword . '%')->take(3)->get();
    $result['newslifestyles'] = Newslifestyle::select('title', 'slug')->where('title', 'like', '%' . $request->keyword . '%')->take(3)->get();

    $response = ['template' => view('layouts.search', compact('result'))->render()];

    return json_encode($response);
  }
}
