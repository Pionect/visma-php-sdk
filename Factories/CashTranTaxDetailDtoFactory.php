<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashTranTaxDetailDto;
use Pionect\VismaSdk\Enums\CashTranTaxDetailTaxTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CashTranTaxDetailDto>
 */
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
            'taxType' => $this->faker->randomElement(CashTranTaxDetailTaxTypeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return CashTranTaxDetailDto::class;
    }
}
