<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryDto extends Model
{
    /** The unique internal identifier of the  item as is stored in the database. This Id is not visible in the window. */
    #[Property]
    public ?int $inventoryId;

    /** Mandatory field: The top part &gt; Item Id* &gt; The unique alphanumeric identifier of the stock item. */
    #[Property]
    public ?string $inventoryNumber;

    /** The top part &gt; Item status &gt; The status of the stock item. The alternatives are: Active, No sales, No purchases, No request, Inactive, Marked for deletion. */
    #[Property]
    public ?string $status;

    /** General information tab &gt; Item defaults section &gt; Type &gt; The type of stock item. */
    #[Property]
    public ?string $type;

    /** The top part &gt; Description *&gt; A brief description of the stock item. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Body *&gt; A brief description of the stock item. */
    #[Property]
    public ?string $body;

    #[Property]
    public ?itemClassInInventoryDto $itemClass;

    #[Property]
    public ?postingClassInInventoryDto $postingClass;

    #[Property]
    public ?vatCodeInInventoryDto $vatCode;

    #[Property]
    public ?lotSerialClassInInventoryDto $lotSerialClass;

    /** Price/cost information tab &gt; Price management section &gt; Default price &gt; The price of the stock item. */
    #[Property]
    public ?float $defaultPrice;

    /** Price/cost information tab &gt; Standard cost section &gt; Pending cost &gt; The pending standard cost for the stock item. */
    #[Property]
    public ?float $pendingCost;

    /** Price/cost information tab &gt; Standard cost section &gt; Pending cost date &gt; The date when the pending standard cost becomes effective. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $pendingCostDate;

    /** Price/cost information tab &gt; Standard cost section &gt; Current cost &gt; Read-only. This field displays the current standard cost for the stock item. */
    #[Property]
    public ?float $currentCost;

    /** Price/cost information tab &gt; Standard cost section &gt; Effective date &gt; Read-only. This field shows the effective date for the current standard cost of the stock item. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    /** Price/cost information tab &gt; Standard cost section &gt; Last cost &gt; Read-only. This field showing the last standard cost defined for the stock item. */
    #[Property]
    public ?float $lastCost;

    /** Information collected from system. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Mandatory field: General information tab &gt; Unit of measurement section &gt; Base unit* &gt; The UoM used as the base unit for this stock item. */
    #[Property]
    public ?string $baseUnit;

    /** Mandatory field: General information tab &gt; Unit of measurement section &gt; Sales unit *&gt; The UoM to be used as the sales unit for the stock item. */
    #[Property]
    public ?string $salesUnit;

    /** Mandatory field: General information tab &gt; Unit of measurement section &gt; Purchase unit *&gt; The UoM to be used as the purchase unit for the stock item. */
    #[Property]
    public ?string $purchaseUnit;

    #[Property]
    public ?bool $stockItem;

    #[Property]
    public ?bool $kitItem;

    #[Property]
    public ?accountInformationInInventoryDto $accountInformation;

    #[Property]
    public ?costPriceStatisticsInInventoryDto $costPriceStatistics;

    /** Cross-reference tab &gt; */
    #[Property]
    public ?array $crossReferences;

    /** Attributes tab &gt; */
    #[Property]
    public ?array $attachments;

    #[Property]
    public ?array $attributes;

    /** Warehouse details tab &gt; */
    #[Property]
    public ?array $warehouseDetails;

    /** General information tab &gt; The Unit conversion table just below the Unit of measurement section. Several fields collected from different parts of the window. */
    #[Property]
    public ?array $inventoryUnits;

    #[Property]
    public ?defaultWarehouseInInventoryDto $defaultWarehouse;

    #[Property]
    public ?defaultIssueFromInInventoryDto $defaultIssueFrom;

    #[Property]
    public ?defaultReceiptToInInventoryDto $defaultReceiptTo;

    /** Supplier details tab */
    #[Property]
    public ?array $supplierDetails;

    /** Attributes tab &gt; Sales categories grid */
    #[Property]
    public ?array $salesCategories;

    #[Property]
    public ?packagingInInventoryDto $packaging;

    #[Property]
    public ?intrastatInInventoryDto $intrastat;

    /** The Price/cost information tab &gt; Price management section &gt; List price &gt; The manufacturer's suggested retail price (MSRP) of the stock item. */
    #[Property]
    public ?float $recommendedPrice;

    /** The Price/cost information tab &gt; Price management section &gt; Price manager &gt; The ID of the manager responsible for the product pricing. */
    #[Property]
    public ?string $priceManagerId;

    #[Property]
    public ?priceManagerInInventoryDto $priceManager;

    #[Property]
    public ?priceClassInInventoryDto $priceClass;

    /** The Price/cost information tab &gt; Price management section &gt; Price work group &gt; The work group responsible for product pricing. Select the pricing work group for the stock item. */
    #[Property]
    public ?int $priceWorkgroupId;

    /** The Price/cost information tab &gt; Price management section &gt; Price class &gt; The price class of the item. */
    #[Property]
    public ?string $priceClassId;

    /** Icon Notes on top of the window &gt; Pop-up window for providing any user-defined text connected to the inventory item. */
    #[Property]
    public ?string $note;

    /** Timestamp of the inventory item record */
    #[Property]
    public ?string $timestamp;

    #[Property]
    public ?string $errorInfo;
}
