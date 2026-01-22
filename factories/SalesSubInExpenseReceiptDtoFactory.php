<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesSubInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesSubInExpenseReceiptDtoFactory extends Factory
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
        return SalesSubInExpenseReceiptDto::class;
    }
}
