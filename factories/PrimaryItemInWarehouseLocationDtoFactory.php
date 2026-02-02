<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PrimaryItemInWarehouseLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PrimaryItemInWarehouseLocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PrimaryItemInWarehouseLocationDto::class;
    }
}
