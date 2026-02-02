<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderDocumentLineDtoFactory testFactory()
 */
class SalesOrderDocumentLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?int $sortOrder = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        public ?WarehouseIdDescriptionDto $warehouse = null,
        public ?string $uom = null,
        public int|float|null $quantity = null,
        public int|float|null $qtyOnShipments = null,
        public int|float|null $openQty = null,
        public int|float|null $unitCost = null,
        public int|float|null $unitPrice = null,
        public int|float|null $unitPriceInBaseCurrency = null,
        public ?string $discountCode = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public ?bool $manualDiscount = null,
        public int|float|null $discUnitPrice = null,
        public int|float|null $extPrice = null,
        public int|float|null $unbilledAmount = null,
        public ?string $lineDescription = null,
        public ?BranchNumberDto $branchNumber = null,
        public ?string $note = null,
        public ?array $attachments = null,
    ) {}
}
