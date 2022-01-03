<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DownloadPriceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DownloadPrice', 'App\Service\DownloadPriceService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
