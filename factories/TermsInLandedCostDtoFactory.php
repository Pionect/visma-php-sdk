<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TermsInLandedCostDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TermsInLandedCostDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TermsInLandedCostDto::class;
    }
}
