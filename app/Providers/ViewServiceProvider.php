<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\View\View;


class ViewServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
                     
            view()->composer('layouts.app','App\Http\ViewComposer\TaskCountComposer@compose' );

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
