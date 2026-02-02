<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentSoline;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentSolineFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'orderLineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentSoline::class;
    }
}
