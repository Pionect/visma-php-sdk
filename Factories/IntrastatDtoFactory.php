<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IntrastatDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IntrastatDtoFactory extends Factory
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
        return IntrastatDto::class;
    }
}
