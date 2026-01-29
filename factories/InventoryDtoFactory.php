<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryId' => $this->faker->numberBetween(1, 1000),
            'inventoryNumber' => $this->faker->word(),
            'status' => $this->faker->word(),
            'type' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->word(),
            'itemClass' => ItemClassInInventoryDtoFactory::new()->make(),
            'postingClass' => PostingClassInInventoryDtoFactory::new()->make(),
            'vatCode' => VatCodeInInventoryDtoFactory::new()->make(),
            'lotSerialClass' => LotSerialClassInInventoryDtoFactory::new()->make(),
            'defaultPrice' => $this->faker->randomFloat(2, 0, 1000),
            'pendingCost' => $this->faker->randomFloat(2, 0, 1000),
            'pendingCostDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'currentCost' => $this->faker->randomFloat(2, 0, 1000),
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastCost' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'baseUnit' => $this->faker->word(),
            'salesUnit' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'stockItem' => $this->faker->boolean(),
            'kitItem' => $this->faker->boolean(),
            'accountInformation' => AccountInformationInInventoryDtoFactory::new()->make(),
            'costPriceStatistics' => CostPriceStatisticsInInventoryDtoFactory::new()->make(),
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => DefaultWarehouseInInventoryDtoFactory::new()->make(),
            'defaultIssueFrom' => DefaultIssueFromInInventoryDtoFactory::new()->make(),
            'defaultReceiptTo' => DefaultReceiptToInInventoryDtoFactory::new()->make(),
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => PackagingInInventoryDtoFactory::new()->make(),
            'intrastat' => IntrastatInInventoryDtoFactory::new()->make(),
            'recommendedPrice' => $this->faker->randomFloat(2, 0, 1000),
            'priceManagerId' => $this->faker->uuid(),
            'priceManager' => PriceManagerInInventoryDtoFactory::new()->make(),
            'priceClass' => PriceClassInInventoryDtoFactory::new()->make(),
            'priceWorkgroupId' => $this->faker->numberBetween(1, 1000),
            'priceClassId' => $this->faker->uuid(),
            'note' => $this->faker->word(),
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryDto::class;
    }
}
