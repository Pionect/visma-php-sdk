<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipLocationInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipLocationInWarehouseDtoFactory extends Factory
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
        return ShipLocationInWarehouseDto::class;
    }
}
