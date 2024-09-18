<?php

declare(strict_types=1);

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        dd('boot');
    }
}
