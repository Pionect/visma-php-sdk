<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CountryDto::class;
    }
}
