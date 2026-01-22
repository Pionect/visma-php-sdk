<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTransactionTaxDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTransactionTaxDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatId' => $this->faker->word(),
            'taxableAmount' => $this->faker->word(),
            'vatAmount' => $this->faker->word(),
            'expenseAmount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionTaxDetailUpdateDto::class;
    }
}
