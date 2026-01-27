<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyStockComponentsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyStockComponentsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'itemId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'location' => $this->faker->word(),
            'uoM' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'reasonCode' => $this->faker->word(),
            'componentQty' => $this->faker->randomFloat(2, 0, 1000),
            'minComponentQty' => $this->faker->randomFloat(2, 0, 1000),
            'allowComponentQtyVariance' => $this->faker->boolean(),
            'maxComponentQty' => $this->faker->randomFloat(2, 0, 1000),
            'allowComponentSubstitution' => $this->faker->boolean(),
            'disassemblyCoeff' => $this->faker->randomFloat(2, 0, 1000),
            'allocations' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyStockComponentsDto::class;
    }
}
