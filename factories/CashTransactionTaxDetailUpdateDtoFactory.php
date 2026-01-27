<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTransactionTaxDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTransactionTaxDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatId' => $this->faker->uuid(),
            'taxableAmount' => $this->faker->randomFloat(2, 0, 1000),
            'vatAmount' => $this->faker->randomFloat(2, 0, 1000),
            'expenseAmount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionTaxDetailUpdateDto::class;
    }
}
