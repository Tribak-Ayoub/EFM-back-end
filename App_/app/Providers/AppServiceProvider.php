<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\App\Providers\CoreServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
