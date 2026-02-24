<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTransactionTaxDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CashTransactionTaxDetailUpdateDto>
 */
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
