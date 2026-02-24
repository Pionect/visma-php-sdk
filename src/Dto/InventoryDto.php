<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\InventoryStatusEnum;
use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryDtoFactory testFactory()
 */
class InventoryDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InventoryDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The unique internal identifier of the  item as is stored in the database.
         * This Id is not visible in the window.
         */
        public ?int $inventoryId = null,
        /**
         * Mandatory field: The top part > Item Id* > The unique alphanumeric identifier
         * of the stock item.
         */
        public ?string $inventoryNumber = null,
        /**
         * The top part > Item status > The status of the stock item. The alternatives
         * are: Active, No sales, No purchases, No request, Inactive, Marked for
         * deletion.
         */
        public ?InventoryStatusEnum $status = null,
        /**
         * General information tab > Item defaults section > Type > The type of stock
         * item.
         */
        public ?ItemClassTypeEnum $type = null,
        /** The top part > Description *> A brief description of the stock item. */
        public ?string $description = null,
        /** The top part > Body *> A brief description of the stock item. */
        public ?string $body = null,
        public ?ItemClassInInventoryDto $itemClass = null,
        public ?PostingClassInInventoryDto $postingClass = null,
        public ?VatCodeInInventoryDto $vatCode = null,
        public ?LotSerialClassInInventoryDto $lotSerialClass = null,
        /**
         * Price/cost information tab > Price management section > Default price > The
         * price of the stock item.
         */
        public int|float|null $defaultPrice = null,
        /**
         * Price/cost information tab > Standard cost section > Pending cost > The
         * pending standard cost for the stock item.
         */
        public int|float|null $pendingCost = null,
        /**
         * Price/cost information tab > Standard cost section > Pending cost date > The
         * date when the pending standard cost becomes effective.
         */
        public ?\Carbon\Carbon $pendingCostDate = null,
        /**
         * Price/cost information tab > Standard cost section > Current cost >
         * Read-only. This field displays the current standard cost for the stock item.
         */
        public int|float|null $currentCost = null,
        /**
         * Price/cost information tab > Standard cost section > Effective date >
         * Read-only. This field shows the effective date for the current standard cost
         * of the stock item.
         */
        public ?\Carbon\Carbon $effectiveDate = null,
        /**
         * Price/cost information tab > Standard cost section > Last cost > Read-only.
         * This field showing the last standard cost defined for the stock item.
         */
        public int|float|null $lastCost = null,
        /** Information collected from system. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * Mandatory field: General information tab > Unit of measurement section > Base
         * unit* > The UoM used as the base unit for this stock item.
         */
        public ?string $baseUnit = null,
        /**
         * Mandatory field: General information tab > Unit of measurement section >
         * Sales unit *> The UoM to be used as the sales unit for the stock item.
         */
        public ?string $salesUnit = null,
        /**
         * Mandatory field: General information tab > Unit of measurement section >
         * Purchase unit *> The UoM to be used as the purchase unit for the stock item.
         */
        public ?string $purchaseUnit = null,
        public ?bool $stockItem = null,
        public ?bool $kitItem = null,
        public ?AccountInformationInInventoryDto $accountInformation = null,
        public ?CostPriceStatisticsInInventoryDto $costPriceStatistics = null,
        /**
         * @var InventoryCrossReferenceDto[]|null
         *                                        Cross-reference tab >
         */
        public ?array $crossReferences = null,
        /**
         * @var AttachmentDto[]|null
         *                           Attributes tab >
         */
        public ?array $attachments = null,
        /** @var AttributeIdValueDto[]|null */
        public ?array $attributes = null,
        /**
         * @var WarehouseDetailDto[]|null
         *                                Warehouse details tab >
         */
        public ?array $warehouseDetails = null,
        /**
         * @var InventoryUnitDto[]|null
         *                              General information tab > The Unit conversion table just below the Unit of
         *                              measurement section. Several fields collected from different parts of the
         *                              window.
         */
        public ?array $inventoryUnits = null,
        public ?DefaultWarehouseInInventoryDto $defaultWarehouse = null,
        public ?DefaultIssueFromInInventoryDto $defaultIssueFrom = null,
        public ?DefaultReceiptToInInventoryDto $defaultReceiptTo = null,
        /**
         * @var SupplierDetailsLineDto[]|null
         *                                    Supplier details tab
         */
        public ?array $supplierDetails = null,
        /**
         * @var SalesCategoryLineDto[]|null
         *                                  Attributes tab > Sales categories grid
         */
        public ?array $salesCategories = null,
        public ?PackagingInInventoryDto $packaging = null,
        public ?IntrastatInInventoryDto $intrastat = null,
        /**
         * The Price/cost information tab > Price management section > List price > The
         * manufacturer's suggested retail price (MSRP) of the stock item.
         */
        public int|float|null $recommendedPrice = null,
        /**
         * The Price/cost information tab > Price management section > Price manager >
         * The ID of the manager responsible for the product pricing.
         */
        #[MapName('priceManagerID')]
        public ?string $priceManagerId = null,
        public ?PriceManagerInInventoryDto $priceManager = null,
        public ?PriceClassInInventoryDto $priceClass = null,
        /**
         * The Price/cost information tab > Price management section > Price work group
         * > The work group responsible for product pricing. Select the pricing work
         * group for the stock item.
         */
        #[MapName('priceWorkgroupID')]
        public ?int $priceWorkgroupId = null,
        /**
         * The Price/cost information tab > Price management section > Price class > The
         * price class of the item.
         */
        #[MapName('priceClassID')]
        public ?string $priceClassId = null,
        /**
         * Icon Notes on top of the window > Pop-up window for providing any
         * user-defined text connected to the inventory item.
         */
        public ?string $note = null,
        /** Timestamp of the inventory item record */
        public ?string $timestamp = null,
        public ?string $errorInfo = null,
    ) {}
}
