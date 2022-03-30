<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Classification;
use App\Models\Nosology;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index(Request $request)
  {
    if ($request->agreement == 'agree') {
      session()->put('aware', 'awared');
    }
    if (!session()->has('aware')) {
      return redirect(route('products.attention'));
    }

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

  public function show(Request $request)
  {
    if ($request->agree == 'agree') {
      session()->put('aware', 'awared');
    }
    if (!session()->has('aware')) {
      return redirect(route('products.attention'));
    }
    $page['product'] = Product::find($request->id);

    $page['similar-products'] = Product::where('nosology_id', $page['product']->nosology_id)
      ->orWhere('classification_id', $page['product']->classification_id)
      ->get();

    $page['popular-products'] = Product::orderBy('title')->take(9)->get();

    return view('pages.products.show', compact('page'));
  }

  public function downloadInstruction(Request $request)
  {
    $product = Product::find($request->id);

    if (!$product->filename) {
      return back();
    }
    $file = public_path('files/products/instructions/' . $product->filename);

    $extension = pathinfo($file, PATHINFO_EXTENSION);

    $headers = array(
      'Content-Type: application/' . $extension,
    );

    return response()->download($file, $product->filename, $headers);
  }

  public function attention()
  {
    return view('pages.products.attention');
  }
}
