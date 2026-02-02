<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IntrastatInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IntrastatInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'cN8' => $this->faker->word(),
            'countryOfOrigin' => $this->faker->word(),
            'supplementaryMeasureUnit' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return IntrastatInInventoryDto::class;
    }
}
