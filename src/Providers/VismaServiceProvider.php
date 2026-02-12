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
            __DIR__.'/../../config/visma-sdk.php',
            'visma-sdk'
        );

        // Note: VismaConnector binding is intentionally NOT registered here.
        // Consuming applications should register it themselves to allow
        // customization (e.g., adding middleware, configuring auth, etc.).
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish config
        $this->publishes([
            __DIR__.'/../../config/visma-sdk.php' => config_path('visma-sdk.php'),
        ], 'visma-sdk-config');
    }
}
