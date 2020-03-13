<?php

namespace App\Providers;

use App\Category;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //   For sending data to all view files
        //   View::share('name','Barat Ahmed');

        //   For sending data to specific view files
        View::composer('front-end.includes.header', function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
    }
}
