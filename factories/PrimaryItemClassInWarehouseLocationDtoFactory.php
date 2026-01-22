<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrimaryItemClassInWarehouseLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrimaryItemClassInWarehouseLocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
        ];
    }

    protected function modelClass(): string
    {
        return PrimaryItemClassInWarehouseLocationDto::class;
    }
}
