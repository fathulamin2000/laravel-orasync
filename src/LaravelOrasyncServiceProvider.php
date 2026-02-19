<?php

namespace Fathulamin2000\LaravelOrasync;

use Illuminate\Support\ServiceProvider;

class LaravelOrasyncServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('orasync', function () {
            return new OraSyncService();
        });
    }

    public function boot(): void
    {
        //
    }
}
