<?php

namespace App\Providers;

use App\View\Components\Tabla;
use App\View\Components\TablaCuerpo;
use App\View\Components\TablaEncabezado;
use App\View\Components\TablaFila;
use App\View\Components\TablaPie;
use App\View\Components\Tarjeta;
use Illuminate\Support\Facades\Blade;
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
        //
        Blade::component('tarjeta', Tarjeta::class);
        Blade::component('tabla', Tabla::class);
        Blade::component('tablaencabezado', TablaEncabezado::class);
        Blade::component('tablacuerpo', TablaCuerpo::class);
        Blade::component('tablapie', TablaPie::class);
        Blade::component('tablafila', TablaFila::class);
    }
}
