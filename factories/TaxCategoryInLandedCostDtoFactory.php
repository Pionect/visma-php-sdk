<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryInLandedCostDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryInLandedCostDtoFactory extends Factory
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
        return TaxCategoryInLandedCostDto::class;
    }
}
