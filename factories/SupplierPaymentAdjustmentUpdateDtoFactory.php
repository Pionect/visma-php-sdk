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
            'amountPaid' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountTaken' => $this->faker->randomFloat(2, 0, 1000),
            'crossRate' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentAdjustmentUpdateDto::class;
    }
}
