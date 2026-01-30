<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierInvoiceLandedCostDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceLandedCostDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'landedCostCodeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'amount' => null,
            'vatCategoryId' => $this->faker->uuid(),
            'purchaseReceiptType' => $this->faker->word(),
            'purcahseOrderReceiptNumber' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'siteId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLandedCostDto::class;
    }
}
