<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierPaymentAdjustmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentAdjustmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => null,
            'cashDiscountTaken' => null,
            'crossRate' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentAdjustmentUpdateDto::class;
    }
}
