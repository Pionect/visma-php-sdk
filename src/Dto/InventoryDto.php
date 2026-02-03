<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryDtoFactory testFactory()
 */
class InventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
        /** @var InventoryCrossReferenceDto[]|null */
        public ?array $crossReferences = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        /** @var AttributeIdValueDto[]|null */
        public ?array $attributes = null,
        /** @var WarehouseDetailDto[]|null */
        public ?array $warehouseDetails = null,
        /** @var InventoryUnitDto[]|null */
        public ?array $inventoryUnits = null,
        public ?DefaultWarehouseInInventoryDto $defaultWarehouse = null,
        public ?DefaultIssueFromInInventoryDto $defaultIssueFrom = null,
        public ?DefaultReceiptToInInventoryDto $defaultReceiptTo = null,
        /** @var SupplierDetailsLineDto[]|null */
        public ?array $supplierDetails = null,
        /** @var SalesCategoryLineDto[]|null */
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
