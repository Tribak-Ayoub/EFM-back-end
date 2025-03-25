<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\PkgProduct\App\Providers\PkgProductServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(PkgProductServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
