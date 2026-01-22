<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesAccountInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesAccountInExpenseReceiptDtoFactory extends Factory
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
        return SalesAccountInExpenseReceiptDto::class;
    }
}
