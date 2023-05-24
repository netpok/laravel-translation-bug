<?php

namespace App\Providers;

use BenSampo\Enum\EnumServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->getProvider(EnumServiceProvider::class)?->booted(function () {
            if ($this->app->has('translator')) {
                // $this->app->get('translator')->setLoaded([]);
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
