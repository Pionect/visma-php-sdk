<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInExpenseReceiptDtoFactory extends Factory
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
        return CustomerInExpenseReceiptDto::class;
    }
}
