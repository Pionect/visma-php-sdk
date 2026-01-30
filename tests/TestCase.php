<?php

namespace Pionect\VismaSdk\Tests;

use Dotenv\Dotenv;
use Orchestra\Testbench\TestCase as Orchestra;
use Pionect\VismaSdk\Providers\VismaServiceProvider;
use Saloon\Laravel\SaloonServiceProvider;
use Spatie\LaravelData\LaravelDataServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            SaloonServiceProvider::class,
            LaravelDataServiceProvider::class,
            VismaServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // Load .env.test into the environment.
        if (file_exists(dirname(__DIR__).'/.env')) {
            (Dotenv::createImmutable(dirname(__DIR__), '.env'))->load();
        }

        // todo: inject neccesary auth config
    }
}
