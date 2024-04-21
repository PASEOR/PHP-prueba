<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // poder pasar un parametro a todas las vistas de la aplicacion //


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
        view::share('prueba', 'este es un mensaje de prueba');  // para enviar una variable a todas
        
    }
}
