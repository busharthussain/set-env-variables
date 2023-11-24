<?php

namespace bushart\SetEnvVariable;
use Illuminate\Support\ServiceProvider;

class LaravelSetEnv extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->commands([
            Commands\SetEnv::class,
        ]);
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
