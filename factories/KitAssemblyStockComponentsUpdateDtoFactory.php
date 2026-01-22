<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyStockComponentsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyStockComponentsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'itemId' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uoM' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'stockComponentLineAllocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyStockComponentsUpdateDto::class;
    }
}
