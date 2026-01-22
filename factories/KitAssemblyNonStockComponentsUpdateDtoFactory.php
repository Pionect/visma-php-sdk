<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyNonStockComponentsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyNonStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'itemId' => $this->faker->word(),
            'uoM' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyNonStockComponentsUpdateDto::class;
    }
}
