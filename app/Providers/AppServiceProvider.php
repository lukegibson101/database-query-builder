<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\ServiceProvider;

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
        Password::defaults(function(){
            $theRules = Password::min(8)->mixedCase()->numbers()->symbols();
            return ($this->app->isProduction()) ? $theRules->uncompromised() : $theRules;
        });

        Paginator::useBootstrapFive();
    }
}
