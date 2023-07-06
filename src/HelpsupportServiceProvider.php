<?php

namespace Miaad\Helpsupport;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;
use Miaad\Helpsupport\Http\Middleware\ChangePasswordMiddleware;

class HelpsupportServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('helpsupport', function ($app) {
            return new Helpsupport();
        });

        $this->publishes([
            __DIR__ . '/../assets' => public_path('miaad/helpsupport'),
        ], 'public');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'helpsupport');

    }
}
