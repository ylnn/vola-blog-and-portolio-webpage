<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Skill;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['*'], function($view){
            $view->with('skills', Skill::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
