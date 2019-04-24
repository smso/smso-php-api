<?php

namespace smso\smso;

use Illuminate\Support\ServiceProvider;

class SmsoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'smso-client');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'smso-client');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');    

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/smso.php' => config_path('smso.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/smso-client'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/smso-client'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/smso-client'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/smso.php', 'smso-client');

        // Register the main class to use with the facade
        $this->app->singleton('smso-client', function () {
            return new SmsoClient;
        });
    }
}
