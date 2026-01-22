<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentSoorder;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentSoorderFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentSoorder::class;
    }
}
