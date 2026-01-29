<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTranTaxDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTranTaxDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tax' => TaxInCashTranTaxDetailDtoFactory::new()->make(),
            'taxRate' => $this->faker->randomFloat(2, 0, 1000),
            'taxableAmount' => $this->faker->randomFloat(2, 0, 1000),
            'taxAmount' => $this->faker->randomFloat(2, 0, 1000),
            'deductibleTaxRate' => $this->faker->randomFloat(2, 0, 1000),
            'expenseAmount' => $this->faker->randomFloat(2, 0, 1000),
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
