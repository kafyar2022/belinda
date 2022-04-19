<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Classification;
use App\Models\Nosology;
use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
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
    $page['product'] = Product::where('slug', $request->slug)->first();

    $page['similar-products'] = Product::where('nosology_id', $page['product']->nosology_id)
      ->orWhere('classification_id', $page['product']->classification_id)
      ->get();

    $page['popular-products'] = Product::orderBy('title')->take(9)->get();

    return view('pages.products.show', compact('page'));
  }

  public function downloadInstruction(Request $request)
  {
    $product = Product::where('slug', $request->slug)->first();

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

  public function store(Request $request)
  {
    $request->validate(['title' => 'required']);

    $slug = SlugService::createSlug(Product::class, 'slug', $request->title);

    $fileName = '';
    if ($request->has('instruction')) {
      $file = $request->file('instruction');
      $fileName = $slug . '.' . $file->extension();
      $file->move(public_path('files/products/instructions'), $fileName);
    }

    $imgName = 'muffin-grey.svg';
    if ($request->has('photo')) {
      $img = $request->file('photo');
      $imgName = $slug . '.' . $img->extension();
      $img->move(public_path('files/products/img'), $imgName);
    }

    $product = Product::create([
      'title' => request('title'),
      'nosology_id' => request('nosology_id'),
      'classification_id' => request('classification_id'),
      'prescription' => request('prescription'),
      'instruction' => $fileName,
      'photo' => $imgName,
      'description' => request('description'),
      'composition' => request('composition'),
      'indications' => request('indications'),
      'mode' => request('mode'),
    ]);

    if ($product) {
      return back()->with('success', 'Продукт успешно добавлен');
    } else {
      return back()->with('fail', 'Произошла ошибка попробуйте позже');
    }
  }

  public function update(Request $request)
  {
    $request->validate(['title' => 'required']);

    $product = Product::find($request->id);

    if ($request->has('instruction')) {
      $path = public_path('files/products/instructions/' . $product->instruction);
      if (file_exists($path) && $product->instruction) {
        unlink($path);
      }
      $file = $request->file('instruction');
      $fileName = $product->slug . '.' . $file->extension();
      $file->move(public_path('files/products/instructions'), $fileName);
      $product->instruction = $fileName;
    }

    if ($request->has('photo')) {
      $path = public_path('files/products/img/' . $product->photo);
      if (file_exists($path) && $product->photo) {
        unlink($path);
      }
      $file = $request->file('photo');
      $fileName = $product->slug . '.' . $file->extension();
      $file->move(public_path('files/products/img'), $fileName);
      $product->photo = $fileName;
    }

    $product->title = $request->title;
    $product->nosology_id = $request->nosology_id;
    $product->classification_id = $request->classification_id;
    $product->prescription = $request->prescription;
    $product->description = $request->description;
    $product->composition = $request->composition;
    $product->indications = $request->indications;
    $product->mode = $request->mode;

    if ($product->update()) {
      return back()->with('success', 'Продукт успешно изменен');
    } else {
      return back()->with('fail', 'Произошла ошибка попробуйте позже');
    }
  }

  public function edit(Request $request)
  {
    $product = Product::find($request->id);
    $data['nosology'] = Nosology::get();
    $data['classification'] = Classification::get();

    return view('pages.products.edit', compact('product', 'data'));
  }

  public function delete(Request $request)
  {
    Product::find($request->id)->delete();
    return back();
  }
}
