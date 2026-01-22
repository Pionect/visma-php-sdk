<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInWarehouseAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInWarehouseAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyInWarehouseAddressDto::class;
    }
}
