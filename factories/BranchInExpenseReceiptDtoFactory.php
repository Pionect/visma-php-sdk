<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchInExpenseReceiptDto::class;
    }
}
