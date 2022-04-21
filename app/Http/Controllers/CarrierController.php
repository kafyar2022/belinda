<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Application;
use App\Models\Vacancy;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index()
  {
    $page = Helper::getPage('carrier');
    $page['vacancies'] = Vacancy::where('active', true)->latest()->get();

    return view('pages.carrier.index', compact('page'));
  }

  public function apply($slug)
  {
    $vacancy = Vacancy::where('slug', $slug)->first();


    return view('pages.carrier.apply', compact('vacancy'));
  }

  public function insertApplication()
  {
    $filename = '';
    if (request('cv')) {
      $file = request('cv');
      $filename = uniqid() . '.' . $file->extension();
      $file->move(public_path('files/applications'), $filename);
    }

    Application::create([
      'vacancy_id' => request('vacancy_id'),
      'name' => request('name'),
      'email' => request('email'),
      'phone' => request('phone'),
      'description' => request('description'),
      'cv' => $filename,
    ]);

    return back()->with('success', 'Ваша заявка успешно отправлена');
  }

  public function activation($id)
  {
    $vacancy = Vacancy::find($id);

    $vacancy->active = !$vacancy->active;

    $vacancy->update();

    return back();
  }

  public function store()
  {
    $vacancy = Vacancy::create([
      'title' => request('title'),
      'slug' => SlugService::createSlug(Vacancy::class, 'slug', request('title')),
      'description' => request('description'),
    ]);

    if ($vacancy) {
      return back();
    } else {
      return back()->with('fail', 'Произошла ошибка попробуйте позже');
    }
  }

  public function show($id)
  {
    $vacancy = Vacancy::find($id);

    $applications = Application::where('vacancy_id', $vacancy->id)->latest()->get();

    return view('dashboard.pages.carrier.show', compact('vacancy', 'applications'));
  }

  public function application($id)
  {
    $application = Application::find($id);

    return view('dashboard.pages.carrier.application', compact('application'));
  }

  public function downloadApplication(Request $request)
  {
    $application = Application::find($request->id);

    if (!$application->cv) {
      return back();
    }
    $file = public_path('files/applications/' . $application->cv);

    $extension = pathinfo($file, PATHINFO_EXTENSION);

    $headers = array(
      'Content-Type: application/' . $extension,
    );

    return response()->download($file, $application->cv, $headers);
  }
}
