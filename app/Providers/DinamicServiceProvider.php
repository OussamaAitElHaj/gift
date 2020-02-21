<?php

namespace App\Providers;
use App\Fornisseur;

use Illuminate\Support\ServiceProvider;

class DinamicServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){

            $view->with('arrayname',Fornisseur::all());
        });
    }
}
