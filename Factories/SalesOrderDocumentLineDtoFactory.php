<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderDocumentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SalesOrderDocumentLineDto>
 */
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
            'quantity' => null,
            'qtyOnShipments' => null,
            'openQty' => null,
            'unitCost' => null,
            'unitPrice' => null,
            'unitPriceInBaseCurrency' => null,
            'discountCode' => $this->faker->word(),
            'discountPercent' => null,
            'discountAmount' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => null,
            'extPrice' => null,
            'unbilledAmount' => null,
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
