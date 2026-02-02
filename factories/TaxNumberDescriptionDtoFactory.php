<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxNumberDescriptionDto::class;
    }
}
