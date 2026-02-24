<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationNonStockComponentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitSpecificationNonStockComponentDto>
 */
class KitSpecificationNonStockComponentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'componentId' => $this->faker->uuid(),
            'componentQty' => null,
            'uom' => $this->faker->word(),
            'allowComponentQtyVariance' => $this->faker->boolean(),
            'minComponentQty' => null,
            'maxComponentQty' => null,
            'description' => $this->faker->sentence(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationNonStockComponentDto::class;
    }
}
