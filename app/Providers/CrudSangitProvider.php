<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CrudSangitProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CrudSangit', function(){
            return new \App\Library\CrudSangit;
        });
    }
}
