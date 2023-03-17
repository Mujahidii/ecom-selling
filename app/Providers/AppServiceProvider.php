<?php

namespace App\Providers;

use App\Models\Category\Category;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', fn($view) => [
           $view->with('categories', Category::whereNull('parent_id')->with('children')->get())
        ]);
    }
}
