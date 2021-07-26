<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Models\Store::observe(\App\Observers\StoreObserver::class);
        \App\Models\UITemplate::observe(\App\Observers\UITemplateObserver::class);
    }
}
