<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyStockComponentsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitAssemblyStockComponentsDto>
 */
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
            'quantity' => null,
            'unitCost' => null,
            'reasonCode' => $this->faker->word(),
            'componentQty' => null,
            'minComponentQty' => null,
            'allowComponentQtyVariance' => $this->faker->boolean(),
            'maxComponentQty' => null,
            'allowComponentSubstitution' => $this->faker->boolean(),
            'disassemblyCoeff' => null,
            'allocations' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyStockComponentsDto::class;
    }
}
