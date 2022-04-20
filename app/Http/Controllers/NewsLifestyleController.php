<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Newslifestyle;
use Cviebrock\EloquentSluggable\Services\SlugService;
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

  public function store(Request $request)
  {
    $request->validate(['title' => 'required']);

    $slug = SlugService::createSlug(Newslifestyle::class, 'slug', $request->title);

    $imgName = 'muffin-grey.svg';
    if ($request->has('img')) {
      $img = $request->file('img');
      $imgName = $slug . '.' . $img->extension();
      $img->move(public_path('files/newslifestyles'), $imgName);
    }

    $newslifestyle = Newslifestyle::create([
      'title' => request('title'),
      'slug' => $slug,
      'img' => $imgName,
      'description' => request('description'),
      'type' => request('type'),
    ]);

    if ($newslifestyle) {
      return back()->with('success', 'Операция прошла успешно');
    } else {
      return back()->with('fail', 'Произошла ошибка попробуйте позже');
    }
  }

  public function edit($id)
  {
    $newslifestyle = Newslifestyle::find($id);

    return view('pages.newslifestyle.edit', compact('newslifestyle'));
  }

  public function update(Request $request)
  {
    $request->validate(['title' => 'required']);

    $newslifestyle = Newslifestyle::find($request->id);

    if ($request->has('img')) {
      $path = public_path('files/newslifestyles/' . $newslifestyle->img);
      if (file_exists($path) && $newslifestyle->img) {
        unlink($path);
      }
      $file = $request->file('img');
      $fileName = $newslifestyle->slug . '.' . $file->extension();
      $file->move(public_path('files/newslifestyles'), $fileName);
      $newslifestyle->img = $fileName;
    }

    $newslifestyle->title = $request->title;
    $newslifestyle->description = $request->description;
    $newslifestyle->type = $request->type;

    if ($newslifestyle->update()) {
      return back()->with('success', 'Успешное редактирование');
    } else {
      return back()->with('fail', 'Произошла ошибка попробуйте позже');
    }
  }
  public function delete(Request $request)
  {
    Newslifestyle::find($request->id)->delete();
    return back();
  }

}
