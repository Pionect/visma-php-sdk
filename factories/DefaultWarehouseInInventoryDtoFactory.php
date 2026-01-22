<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultWarehouseInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultWarehouseInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultWarehouseInInventoryDto::class;
    }
}
