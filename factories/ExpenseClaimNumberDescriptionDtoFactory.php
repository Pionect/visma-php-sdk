<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimNumberDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimNumberDescriptionDtoFactory extends Factory
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
        return ExpenseClaimNumberDescriptionDto::class;
    }
}
