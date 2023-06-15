<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class Lang extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('translate_test', function($lang){
            $lang->with('locale', App::currentLocale());
            $lang->with('all_locales', config('app.all_locales'));
        });
    }
}
