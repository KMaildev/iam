<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\LanguageLevel;
use Carbon\Carbon;
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

        $companie_count = Company::whereDate('created_at', Carbon::today())
            ->count();
        view()->share('companie_count', $companie_count);
    }
}
