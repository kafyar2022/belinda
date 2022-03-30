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
    $keyword = $request->json('keyword');

    $products = Product::orderBy('title');

    if ($keyword) {
      $products->select('products.id', 'products.nosology_id', 'products.classification_id', 'products.title', 'products.prescription', 'products.picture')
        ->join('classifications', 'products.classification_id', '=', 'classifications.id')
        ->join('nosologies', 'products.nosology_id', '=', 'nosologies.id')
        ->where('products.title', 'like', '%' . $keyword . '%')
        ->orWhere('products.prescription', 'like', '%' . $keyword . '%')
        ->orWhere('classifications.title', 'like', '%' . $keyword . '%')
        ->orWhere('nosologies.title', 'like', '%' . $keyword . '%');
    }
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
