<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Providers;

use Illuminate\Support\ServiceProvider;
use Pionect\VismaSdk\VismaConnector;

class VismaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/../../config/visma.php',
            'visma'
        );

        // Register VismaConnector as singleton
        $this->app->singleton(VismaConnector::class);

        // Register alias
        $this->app->alias(VismaConnector::class, 'visma');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../../config/visma.php' => config_path('visma.php'),
        ], 'visma-config');
    }
}
