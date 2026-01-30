<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierInvoiceLandedCostUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceLandedCostUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'landedCostCodeId' => null,
            'description' => $this->faker->sentence(),
            'amount' => null,
            'taxCategoryId' => null,
            'poReceiptNumber' => $this->faker->word(),
            'inventoryId' => null,
            'siteId' => null,
            'locationId' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLandedCostUpdateDto::class;
    }
}
