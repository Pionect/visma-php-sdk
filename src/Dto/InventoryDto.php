<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryDtoFactory factory()
 */
class InventoryDto extends Model
{
    public function __construct(
        public ?int $inventoryId = null,
        public ?string $inventoryNumber = null,
        public ?string $status = null,
        public ?string $type = null,
        public ?string $description = null,
        public ?string $body = null,
        public ?ItemClassInInventoryDto $itemClass = null,
        public ?PostingClassInInventoryDto $postingClass = null,
        public ?VatCodeInInventoryDto $vatCode = null,
        public ?LotSerialClassInInventoryDto $lotSerialClass = null,
        public int|float|null $defaultPrice = null,
        public int|float|null $pendingCost = null,
        public ?\Carbon\Carbon $pendingCostDate = null,
        public int|float|null $currentCost = null,
        public ?\Carbon\Carbon $effectiveDate = null,
        public int|float|null $lastCost = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $baseUnit = null,
        public ?string $salesUnit = null,
        public ?string $purchaseUnit = null,
        public ?bool $stockItem = null,
        public ?bool $kitItem = null,
        public ?AccountInformationInInventoryDto $accountInformation = null,
        public ?CostPriceStatisticsInInventoryDto $costPriceStatistics = null,
        public ?array $crossReferences = null,
        public ?array $attachments = null,
        public ?array $attributes = null,
        public ?array $warehouseDetails = null,
        public ?array $inventoryUnits = null,
        public ?DefaultWarehouseInInventoryDto $defaultWarehouse = null,
        public ?DefaultIssueFromInInventoryDto $defaultIssueFrom = null,
        public ?DefaultReceiptToInInventoryDto $defaultReceiptTo = null,
        public ?array $supplierDetails = null,
        public ?array $salesCategories = null,
        public ?PackagingInInventoryDto $packaging = null,
        public ?IntrastatInInventoryDto $intrastat = null,
        public int|float|null $recommendedPrice = null,
        #[MapName('priceManagerID')]
        public ?string $priceManagerId = null,
        public ?PriceManagerInInventoryDto $priceManager = null,
        public ?PriceClassInInventoryDto $priceClass = null,
        #[MapName('priceWorkgroupID')]
        public ?int $priceWorkgroupId = null,
        #[MapName('priceClassID')]
        public ?string $priceClassId = null,
        public ?string $note = null,
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
