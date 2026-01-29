<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyInExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyInExpenseReceiptDto::class;
    }
}
