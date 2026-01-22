<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Tests;

use Dotenv\Dotenv;
use Orchestra\Testbench\TestCase as Orchestra;
use Pionect\VismaSdk\Providers\VismaServiceProvider;
use Saloon\Laravel\SaloonServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            SaloonServiceProvider::class,
            VismaServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        // Load .env into the environment if it exists
        if (file_exists(dirname(__DIR__).'/.env')) {
            (Dotenv::createImmutable(dirname(__DIR__), '.env'))->load();
        }

        // Set config values for testing
        $app['config']->set('visma.base_url', env('VISMA_BASE_URL'));
        $app['config']->set('visma.api_token', env('VISMA_API_TOKEN'));
    }
}
