<?php

namespace :uc:vendor\:uc:package\Http\Controllers;

use Illuminate\Support\ServiceProvider;

class :uc:packageController extends Controller
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', ':lc:vendor');
        // $this->loadViewsFrom(__DIR__.'/../../resources/views', ':lc:vendor');
        // $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        // $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        // $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/:lc:package.php', ':lc:package');

        // Register the service the package provides. Requires facade
        /*$this->app->singleton(':lc:package', function ($app) {
            return new :uc:package;
        });*/
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [':lc:package'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        //$this->registerSeedsFrom(__DIR__.'/../../database/seeds');

        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/:lc:package.php' => config_path(':lc:package.php'),
        ], ':lc:package.config');

        // Publishing the assets
//        $this->publishes([
//            __DIR__ . '/../../resources/assets/scss' => resource_path('vendor/:lc:vendor/:lc:package/scss'),
//        ], 'ui.assets');

        // Registering package commands.
        // $this->commands([]);
    }
}
