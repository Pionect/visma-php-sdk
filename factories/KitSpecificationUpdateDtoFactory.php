<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class KitSpecificationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'kitInventoryId' => $this->faker->word(),
            'revisionId' => $this->faker->word(),
            'descr' => $this->faker->word(),
            'isActive' => $this->faker->word(),
            'allowCompAddition' => $this->faker->word(),
            'isNonStock' => $this->faker->word(),
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationUpdateDto::class;
    }
}
