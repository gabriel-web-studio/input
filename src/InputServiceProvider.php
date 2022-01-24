<?php

namespace GabrielWebStudio\Input;

use Illuminate\Support\ServiceProvider;

class InputServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            \GabrielWebStudio\Input\Console\InstallCommand::class
        ]);
    }
}
