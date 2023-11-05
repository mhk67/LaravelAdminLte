<?php

namespace Mhk67\AdminLte;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('DashboardController');
        $this->mergeConfigFrom(__DIR__ .'/config/config.php','AdminLte');
    }

    public function boot(): void
    {
        require __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__ . '/views','AdminLte');
        $this->publishes([
            __DIR__.'/assets' => public_path('front'),
        ], 'AdminLte.public');
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('AdminLte.php')
        ], 'AdminLte.config');
    }

}
