<?php

declare(strict_types=1);

namespace Primecorecz\Ui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Primecorecz\Ui\View\Components\Links;

class UiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'primecore');

        Blade::componentNamespace('Primecorecz\\Ui\\View\\Components', 'primecore');

        Blade::component('links', Links::class);
    }
}
