<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShipmentDetailLineAddDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShipmentDetailLineAddDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'shippedQty' => $this->faker->randomFloat(2, 0, 1000),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->word(),
            'customDec2' => $this->faker->word(),
            'customInt1' => $this->faker->word(),
            'customInt2' => $this->faker->word(),
            'customDateTimeUtc1' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShipmentDetailLineAddDto::class;
    }
}
