<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsLifestyleController extends Controller
{
  public function index()
  {
    return view('pages.newslifestyle.index');
  }
  public function news()
  {
    return view('pages.newslifestyle.news');
  }
  public function lifestyle()
  {
    return view('pages.newslifestyle.lifestyle');
  }

  public function show($id)
  {
    return view('pages.newslifestyle.show');
  }
}
