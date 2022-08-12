<?php

namespace Webjhin\Crossadmin;

use Illuminate\Support\ServiceProvider;
use Webjhin\Crossadmin\Console\Commands\CrossadminCommand;

/**
 * The CrossadminServiceProvider class.
 *
 * @package webjhin/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class CrossadminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handle
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('crossadmin', function ($app) {
            return new Crossadmin;
        });

        $this->app->singleton('command.crossadmin', function ($app) {
            return new CrossadminCommand;
        });

        $this->commands('command.crossadmin');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'crossadmin',
            'command.crossadmin',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $packageRoutes = __DIR__ . '/routes/routes.php';

        if (method_exists($this, 'loadRoutesFrom')) {
            $this->loadRoutesFrom($packageRoutes);
        } else {
            if (method_exists($this->app, 'routesAreCached')) {
                if (! $this->app->routesAreCached()) {
                    require $packageRoutes;
                }
            } else {
                include $packageRoutes;
            }
        }
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__ . '/config/config.php';
        $appConfigPath     = config_path('crossadmin.php');

        $this->mergeConfigFrom($packageConfigPath, 'crossadmin');
        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__ . '/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'crossadmin');
        $this->publishes([
            $packageTranslationsPath => base_path('resources/lang/vendor/crossadmin'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__ . '/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'crossadmin');
        $this->publishes([
            $packageViewsPath => base_path('resources/views/vendor/crossadmin'),
        ], 'views');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__ . '/database/migrations';

        if (method_exists($this, 'loadMigrationsFrom')) {
            $this->loadMigrationsFrom($packageMigrationsPath);
        }

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
