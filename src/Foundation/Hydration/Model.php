<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration;

use Spatie\LaravelData\Data;

/**
 * @template TFactory of \Pionect\VismaSdk\Foundation\Factories\Factory
 */
abstract class Model extends Data
{
    /**
     * Get a new test factory instance for the model.
     *
     * @return TFactory
     */
    public static function testFactory(): mixed
    {
        $modelClass = static::class;
        $factoryClass = str_replace('\\Dto\\', '\\Factories\\', $modelClass).'Factory';

        if (class_exists($factoryClass)) {
            return $factoryClass::new();
        }

        throw new \RuntimeException("Factory [{$factoryClass}] not found for model [{$modelClass}].");
    }
}
