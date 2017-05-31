<?php

namespace App;

use Ckryo\Laravel\App\Providers\RouteServiceExtension;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    use RouteServiceExtension;

    protected $namespace = 'App\Controllers';
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->initialRoute();
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

    function mapRoutes (Router $router)
    {
        $router->resource('/', 'Controller');
    }
}