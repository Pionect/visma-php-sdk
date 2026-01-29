<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderDocumentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderDocumentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'warehouse' => WarehouseIdDescriptionDtoFactory::new()->make(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'qtyOnShipments' => $this->faker->randomFloat(2, 0, 1000),
            'openQty' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'unitPriceInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountCode' => $this->faker->word(),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'extPrice' => $this->faker->randomFloat(2, 0, 1000),
            'unbilledAmount' => $this->faker->randomFloat(2, 0, 1000),
            'lineDescription' => $this->faker->sentence(),
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
            'note' => $this->faker->word(),
            'attachments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderDocumentLineDto::class;
    }
}
