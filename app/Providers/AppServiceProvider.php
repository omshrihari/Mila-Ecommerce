<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Pages;
use App\Models\WebProfile;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $sharedData['categories'] = Category::where(['status' => '1'])->get();
            $sharedData['web'] = WebProfile::first();
            $sharedData['pages'] = Pages::all();
            $view->with('sharedData', $sharedData);
        });
    }
}
