<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // If you are using Laravel Passport >= 11, routes are registered automatically.
        // If you need to customize, use the PassportServiceProvider in config/app.php.
        // Otherwise, remove this line to avoid the error.
    }
}
