<?php

namespace App\Providers;

//Use Illuminate\pagination\Paginator; //para usar la paginacion de bootstrap
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //paginator::useBootstrap();
        //Paginator::defaultView('pnombre de la vista.blade.php');
    }
}
