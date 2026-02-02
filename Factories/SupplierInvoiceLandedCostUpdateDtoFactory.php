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
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'landedCostCodeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'amount' => null,
            'taxCategoryId' => $this->faker->uuid(),
            'poReceiptNumber' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'siteId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLandedCostUpdateDto::class;
    }
}
