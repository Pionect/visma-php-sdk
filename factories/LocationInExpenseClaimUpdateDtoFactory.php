<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInExpenseClaimUpdateDto::class;
    }
}
