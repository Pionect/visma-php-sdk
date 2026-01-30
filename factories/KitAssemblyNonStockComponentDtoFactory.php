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
            'quantity' => null,
            'unitCost' => null,
            'reasonCode' => $this->faker->word(),
            'componentQty' => null,
            'allowComponentQtyVariance' => $this->faker->boolean(),
            'minComponentQty' => null,
            'maxComponentQty' => null,
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyNonStockComponentDto::class;
    }
}
