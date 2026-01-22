<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationNonStockComponentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationNonStockComponentDtoFactory extends Factory
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
            'description' => $this->faker->sentence(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationNonStockComponentDto::class;
    }
}
