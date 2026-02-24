<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ShipmentOrderLineDto>
 */
class ShipmentOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
            'orderNbr' => $this->faker->word(),
            'shippedQty' => null,
            'shippedWeight' => null,
            'shippedVolume' => null,
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
