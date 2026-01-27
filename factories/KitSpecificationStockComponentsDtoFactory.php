<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationStockComponentsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationStockComponentsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'componentId' => $this->faker->uuid(),
            'componentQty' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'allowComponentQtyVariance' => $this->faker->boolean(),
            'minComponentQty' => $this->faker->randomFloat(2, 0, 1000),
            'maxComponentQty' => $this->faker->randomFloat(2, 0, 1000),
            'disassemblyCoeff' => $this->faker->randomFloat(2, 0, 1000),
            'allowComponentSubstitution' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationStockComponentsDto::class;
    }
}
