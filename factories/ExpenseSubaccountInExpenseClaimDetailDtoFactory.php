<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseSubaccountInExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseSubaccountInExpenseClaimDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseSubaccountInExpenseClaimDetailDto::class;
    }
}
