<?php

namespace Oukhay\FiBNotifications;

use Illuminate\Support\ServiceProvider;
use Oukhay\FiBNotifications\Repositories\DeviceRepository;

class FiBNotificationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/Routes/routes.php';
        $this->publishes([
            __DIR__ . '/Config' => config_path('fib-notifications'),
        ]);
        $this->publishes([
            __DIR__ . '/Migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/main.php', 'fib-notifications.main'
        );
        $this->app->bind('fib-notifications', function() {
            return new FiBNotification;
        });
        $this->app->bind('deviceRepository', function() {
            return new DeviceRepository;
        });
    }
}
