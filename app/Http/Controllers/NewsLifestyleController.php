<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsLifestyleController extends Controller
{
  public function index()
  {
    return view('pages.newslifestyle.index');
  }

  public function show($id)
  {
    return view('pages.newslifestyle.show');
  }
}
