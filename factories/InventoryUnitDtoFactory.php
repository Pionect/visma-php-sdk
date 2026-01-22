<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryUnitDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryUnitDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'unitType' => $this->faker->numberBetween(1, 100),
            'itemClass' => $this->faker->word(),
            'inventoryId' => $this->faker->numberBetween(1, 1000),
            'toUnit' => $this->faker->word(),
            'sampleToUnit' => $this->faker->word(),
            'fromUnit' => $this->faker->word(),
            'unitMultDiv' => $this->faker->word(),
            'unitRate' => $this->faker->randomFloat(2, 0, 1000),
            'priceAdjustmentMultiplier' => $this->faker->randomFloat(2, 0, 1000),
            'recordId' => $this->faker->numberBetween(1, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryUnitDto::class;
    }
}
