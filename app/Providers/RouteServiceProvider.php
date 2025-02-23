<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
   /**
    * The path to the "home" route for your application.
    *
    * Typically, users are redirected here after authentication.
    *
    * @var string
    */
   public const HOME = '/home';

   /**
    * Define your route model bindings, pattern filters, and other route configuration.
    *
    * @return void
    */
   public function boot()
   {
      $this->configureRateLimiting();

      $this->routes(function () {
         Route::prefix('api')
               ->middleware('api')
               ->namespace($this->namespace)
               ->group(base_path('routes/api.php'));

         Route::middleware('web')
               ->namespace($this->namespace)
               ->group(base_path('routes/web.php'));
      });
   }

   /**
    * Configure the rate limiters for the application.
    *
    * @return void
    */
   protected function configureRateLimiting()
   {
      // RateLimiter::for('api', function () {
      //    return Limit::perMinute(60);
      // });
   }
}
