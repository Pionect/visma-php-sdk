<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => null,
            'description' => $this->faker->sentence(),
            'claimedBy' => null,
            'customer' => null,
            'customerUpdateAnswer' => $this->faker->word(),
            'location' => null,
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimUpdateDto::class;
    }
}
