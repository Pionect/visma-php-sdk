<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AmountInSupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AmountInSupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return AmountInSupplierInvoiceLandedCostUpdateDto::class;
    }
}
