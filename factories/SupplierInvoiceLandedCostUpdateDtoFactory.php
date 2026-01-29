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
            'lineNumber' => LineNumberInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'landedCostCodeId' => LandedCostCodeIdInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'description' => DescriptionInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'amount' => AmountInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'taxCategoryId' => TaxCategoryIdInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'poReceiptNumber' => PoReceiptNumberInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'inventoryId' => InventoryIdInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'siteId' => SiteIdInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
            'locationId' => LocationIdInSupplierInvoiceLandedCostUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceLandedCostUpdateDto::class;
    }
}
