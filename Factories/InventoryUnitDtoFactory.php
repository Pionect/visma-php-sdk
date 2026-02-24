<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryUnitDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryUnitDto>
 */
class InventoryUnitDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'unitType' => $this->faker->numberBetween(1, 100),
            'itemClass' => ItemClassDtoFactory::new()->make(),
            'inventoryId' => $this->faker->numberBetween(1, 1000),
            'toUnit' => $this->faker->word(),
            'sampleToUnit' => $this->faker->word(),
            'fromUnit' => $this->faker->word(),
            'unitMultDiv' => $this->faker->word(),
            'unitRate' => null,
            'priceAdjustmentMultiplier' => null,
            'recordId' => $this->faker->numberBetween(1, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryUnitDto::class;
    }
}
