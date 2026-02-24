<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryDto;
use Pionect\VismaSdk\Enums\InventoryStatusEnum;
use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryDto>
 */
class InventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryId' => $this->faker->numberBetween(1, 1000),
            'inventoryNumber' => $this->faker->word(),
            'status' => $this->faker->randomElement(InventoryStatusEnum::cases()),
            'type' => $this->faker->randomElement(ItemClassTypeEnum::cases()),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->word(),
            'itemClass' => null,
            'postingClass' => null,
            'vatCode' => null,
            'lotSerialClass' => null,
            'defaultPrice' => null,
            'pendingCost' => null,
            'pendingCostDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'currentCost' => null,
            'effectiveDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastCost' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'baseUnit' => $this->faker->word(),
            'salesUnit' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'stockItem' => $this->faker->boolean(),
            'kitItem' => $this->faker->boolean(),
            'accountInformation' => null,
            'costPriceStatistics' => null,
            'crossReferences' => [],
            'attachments' => [],
            'attributes' => [],
            'warehouseDetails' => [],
            'inventoryUnits' => [],
            'defaultWarehouse' => null,
            'defaultIssueFrom' => null,
            'defaultReceiptTo' => null,
            'supplierDetails' => [],
            'salesCategories' => [],
            'packaging' => null,
            'intrastat' => null,
            'recommendedPrice' => null,
            'priceManagerId' => $this->faker->uuid(),
            'priceManager' => null,
            'priceClass' => null,
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
