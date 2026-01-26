<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Foundation\Hydration\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @method static Collection<int, Model> hydrateCollection(string $model, array<int, mixed> $data)
 * @method static Model hydrate(string $model, array<string, mixed> $item)
 */
class Hydrator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pionect\VismaSdk\Foundation\Hydration\Hydrator::class;
    }
}
