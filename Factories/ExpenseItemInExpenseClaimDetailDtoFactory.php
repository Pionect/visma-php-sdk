<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseItemInExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseItemInExpenseClaimDetailDtoFactory extends Factory
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
        return ExpenseItemInExpenseClaimDetailDto::class;
    }
}
