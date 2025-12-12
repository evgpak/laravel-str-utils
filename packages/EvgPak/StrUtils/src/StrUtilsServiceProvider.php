<?php

namespace EvgPak\StrUtils;

use Illuminate\Support\ServiceProvider;

class StrUtilsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind the class to the app container
        $this->app->bind('str-utils', function ($app) {
            return new StrUtils();
        });
    }

    public function boot()
    {
        // Here you can publish config files or views if needed
    }
}
