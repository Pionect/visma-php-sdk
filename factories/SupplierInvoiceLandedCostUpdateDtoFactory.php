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
            'landedCostCodeId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->word(),
            'taxCategoryId' => $this->faker->word(),
            'poReceiptNumber' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'siteId' => $this->faker->word(),
            'locationId' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLandedCostUpdateDto::class;
    }
}
