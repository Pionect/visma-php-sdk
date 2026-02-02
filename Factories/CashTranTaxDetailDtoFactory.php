<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTranTaxDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTranTaxDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tax' => null,
            'taxRate' => null,
            'taxableAmount' => null,
            'taxAmount' => null,
            'deductibleTaxRate' => null,
            'expenseAmount' => null,
            'includeInVatExemptTotal' => $this->faker->boolean(),
            'pendingVat' => $this->faker->boolean(),
            'statisticalVat' => $this->faker->boolean(),
            'reverseVat' => $this->faker->boolean(),
            'taxType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashTranTaxDetailDto::class;
    }
}
