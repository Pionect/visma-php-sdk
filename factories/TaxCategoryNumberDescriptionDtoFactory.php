<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryNumberDescriptionDtoFactory extends Factory
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
        return TaxCategoryNumberDescriptionDto::class;
    }
}
