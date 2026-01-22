<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashAccountInCashTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashAccountInCashTransactionDtoFactory extends Factory
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
        return CashAccountInCashTransactionDto::class;
    }
}
