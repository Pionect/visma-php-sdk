<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNbr' => $this->faker->word(),
            'shippedQty' => $this->faker->randomFloat(2, 0, 1000),
            'shippedWeight' => $this->faker->randomFloat(2, 0, 1000),
            'shippedVolume' => $this->faker->randomFloat(2, 0, 1000),
            'invoiceType' => $this->faker->word(),
            'invoiceNbr' => $this->faker->word(),
            'inventoryDocType' => $this->faker->word(),
            'inventoryRefNbr' => $this->faker->word(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentOrderLineDto::class;
    }
}
