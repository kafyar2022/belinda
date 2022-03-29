<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Classification;
use App\Models\Nosology;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('products');
    $page['classifications'] = Classification::get();
    $page['nosologies'] = Nosology::get();
    $page['products'] = Product::orderBy('title')->paginate(16);

    return view('pages.products.index', compact('page'));
  }

  public function filter(Request $request)
  {
    $classification = $request->json('classification');
    $nosology = $request->json('nosology');
    $prescription = $request->json('prescription');
    
    $products = Product::orderBy('title');
    
    if ($classification) {
      $products->where('classification_id', $classification);
    }
    if ($nosology) {
      $products->where('nosology_id', $nosology);
    }
    if ($prescription) {
      $products->where('prescription', $prescription);
    }

    $products = $products->paginate(16);

    $response = [
      'template' => view('pages.products.data', compact('products'))->render(),
    ];
    
    return json_encode($response);
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
