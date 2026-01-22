<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryIdInSupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryIdInSupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxCategoryIdInSupplierInvoiceLandedCostUpdateDto::class;
    }
}
