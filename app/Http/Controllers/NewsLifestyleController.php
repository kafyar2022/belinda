<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Newslifestyle;
use Illuminate\Http\Request;

class NewsLifestyleController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('newslifestyle');
    $page['newslifestyles'] = Newslifestyle::paginate(6);

    return view('pages.newslifestyle.index', compact('page'));
  }
  public function news()
  {
    $page = Helper::getPage('newslifestyle');
    $page['news'] = Newslifestyle::where('type', 'news')->paginate(6);

    return view('pages.newslifestyle.news', compact('page'));
  }
  public function lifestyle()
  {
    $page = Helper::getPage('newslifestyle');
    $page['lifestyles'] = Newslifestyle::where('type', 'lifestyle')->paginate(6);

    return view('pages.newslifestyle.lifestyle', compact('page'));
  }

  public function show($slug)
  {
    $page = Helper::getPage('newslifestyle');
    $page['newslifestyle'] = Newslifestyle::where('slug', $slug)->first();
    $page['similars'] = Newslifestyle::where('type', $page['newslifestyle']->type)->get();

    return view('pages.newslifestyle.show', compact('page'));
  }
}
