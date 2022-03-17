<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index()
  {
    return view('pages.products.index');
  }

  public function show($id)
  {
    return view('pages.products.show');
  }

  public function attention() 
  {
    return view('pages.products.attention');
  }
}
