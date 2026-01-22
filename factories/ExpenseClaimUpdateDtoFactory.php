<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'claimedBy' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'customerUpdateAnswer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimUpdateDto::class;
    }
}
