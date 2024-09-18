<?php

declare(strict_types=1);

namespace Primecorecz\Ui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'primecore');
        Blade::componentNamespace('Primecorecz\\Ui\\View\\Components', 'primecore');
    }

    public function boot(): void
    {
    }
}
