<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultWarehouseDto::class;
    }
}
