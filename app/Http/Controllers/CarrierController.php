<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('carrier');
    $page['vacancies'] = Vacancy::latest()->get();

    return view('pages.carrier.index', compact('page'));
  }

  public function apply($slug)
  {
    $vacancy = Vacancy::where('slug', $slug)->first();

    return view('pages.carrier.apply', compact('vacancy'));
  }
}
