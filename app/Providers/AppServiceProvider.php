<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
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
        define('name', config('app.name'));
        
            Paginator::defaultView('pagination::default');
        Paginator::useBootstrap();


        $this->loadViewsFrom(base_path('resources/views/admin'), 'Admin');
        $this->loadViewsFrom(base_path('resources/views/web'), 'Web');

    }
}
