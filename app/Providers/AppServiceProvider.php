<?php

namespace App\Providers;

use App\Helpers\Helper;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Schema::defaultStringLength(191);

    Paginator::useBootstrap();

    view()->composer('*', function ($view) {

      $app = Helper::getApp();

      return $view->with([
        'route' => \Route::currentRouteName(),
        'app' => $app
      ]);
    });
  }
}
