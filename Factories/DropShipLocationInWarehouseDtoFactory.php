<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DropShipLocationInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DropShipLocationInWarehouseDtoFactory extends Factory
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
        return DropShipLocationInWarehouseDto::class;
    }
}
