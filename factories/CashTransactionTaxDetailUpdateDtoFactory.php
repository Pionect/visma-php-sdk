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
            'taxableAmount' => null,
            'vatAmount' => null,
            'expenseAmount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionTaxDetailUpdateDto::class;
    }
}
