<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationStockComponentsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'compInventoryId' => $this->faker->word(),
            'dfltCompQty' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'allowQtyVariation' => $this->faker->word(),
            'minCompQty' => $this->faker->word(),
            'maxCompQty' => $this->faker->word(),
            'disassemblyCoeff' => $this->faker->word(),
            'allowSubstitution' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationStockComponentsUpdateDto::class;
    }
}
