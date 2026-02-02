<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInExpenseClaimDetailDtoFactory extends Factory
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
        return LocationInExpenseClaimDetailDto::class;
    }
}
