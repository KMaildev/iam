<?php

namespace App\Providers;

use App\Models\LanguageLevel;
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
        $language_levels = LanguageLevel::all();
        view()->share('language_levels', $language_levels);
    }
}
