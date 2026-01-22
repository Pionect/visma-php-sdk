<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PoReceiptNumberInSupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PoReceiptNumberInSupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PoReceiptNumberInSupplierInvoiceLandedCostUpdateDto::class;
    }
}
