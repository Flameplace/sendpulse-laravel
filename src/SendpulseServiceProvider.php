<?php

namespace Flameplace\Sendpulse;

use Illuminate\Support\ServiceProvider;

class SendpulseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->bind(Sendpulse::class, function () {
            return new Sendpulse();
        });
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('sendpulse.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'sendpulse');

        $this->app->bind('sendpulse', function () {
            return $this->app->make(Sendpulse::class);
        });
    }
}
