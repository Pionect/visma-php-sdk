<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseSubInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseSubInExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseSubInExpenseReceiptDto::class;
    }
}
