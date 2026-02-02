<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInExpenseClaimDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInExpenseClaimDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInExpenseClaimDto::class;
    }
}
