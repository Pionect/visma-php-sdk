<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryInTaskExtendedDtoFactory extends Factory
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
        return TaxCategoryInTaskExtendedDto::class;
    }
}
