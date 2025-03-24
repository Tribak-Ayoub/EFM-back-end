<?php

namespace Modules\PkgWidget\App\Providers;

use Illuminate\Support\ServiceProvider;

class PkgWidgetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
                $this->loadViewsFrom(__DIR__ . '/../../Views', 'PkgWidget');
                $this->loadTranslationsFrom(__DIR__.'/../../lang', 'PkgWidget');

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
