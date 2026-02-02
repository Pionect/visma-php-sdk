<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimInExpenseReceiptDtoFactory extends Factory
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
        return ExpenseClaimInExpenseReceiptDto::class;
    }
}
