<?php

namespace Yuniorhernandez\Alertsli;

use Illuminate\Support\ServiceProvider;

class AlertsliServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /**
         * Publish config files
        */
        $this->publishes([
            __DIR__.'/../config/alertsli.php' => config_path('alertsli.php'),
        ], 'alertsli-config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
         $this->app->bind('alertsli', function() {
                return new Alertsli;
          });

        $this->mergeConfigFrom(
            __DIR__.'/../config/alertsli.php', 'alertsli-config'
        );  
    }
}
