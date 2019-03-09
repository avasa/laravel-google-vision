<?php

namespace Avasa\Vision;

use Illuminate\Support\ServiceProvider;

class GoogleVisionApiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->mergeConfigFrom(__DIR__.'/config/vision.php', 'vision');
        $this->publishes([__DIR__.'/config/vision.php' => config_path('vision.php')]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}