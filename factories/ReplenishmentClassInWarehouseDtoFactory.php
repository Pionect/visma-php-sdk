<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReplenishmentClassInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReplenishmentClassInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReplenishmentClassInWarehouseDto::class;
    }
}
