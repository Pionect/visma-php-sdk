<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationNonStockComponentsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationNonStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'compInventoryId' => $this->faker->uuid(),
            'dfltCompQty' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'allowQtyVariation' => $this->faker->boolean(),
            'minCompQty' => $this->faker->randomFloat(2, 0, 1000),
            'maxCompQty' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationNonStockComponentsUpdateDto::class;
    }
}
