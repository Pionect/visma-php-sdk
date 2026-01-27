<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyNonStockComponentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyNonStockComponentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uoM' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'reasonCode' => $this->faker->word(),
            'componentQty' => $this->faker->randomFloat(2, 0, 1000),
            'allowComponentQtyVariance' => $this->faker->boolean(),
            'minComponentQty' => $this->faker->randomFloat(2, 0, 1000),
            'maxComponentQty' => $this->faker->randomFloat(2, 0, 1000),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyNonStockComponentDto::class;
    }
}
