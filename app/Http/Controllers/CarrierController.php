<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index()
  {
    return view('pages.carrier.index');
  }

  public function apply()
  {
    return view('pages.carrier.apply');
  }
}
