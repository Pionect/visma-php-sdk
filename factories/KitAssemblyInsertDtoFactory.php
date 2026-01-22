<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitAssemblyInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitAssemblyInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'kitAssemblyLink' => $this->faker->word(),
            'refNo' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'itemId' => $this->faker->word(),
            'revision' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'uoM' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'stockComponentLines' => [],
            'stockComponentAllocations' => [],
            'nonStockComponentLines' => [],
            'kitAllocations' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitAssemblyInsertDto::class;
    }
}
