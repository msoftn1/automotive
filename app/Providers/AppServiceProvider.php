<?php

namespace App\Providers;

use App\View\Components\Links;
use App\View\Components\News;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('links', Links::class);
        Blade::component('news', News::class);
    }
}
