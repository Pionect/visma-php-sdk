<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderLineDtoFactory factory()
 */
class SalesOrderLineDto extends Model
{
    public function __construct(
        public ?string $invoiceNbr = null,
        public ?string $operation = null,
        public ?bool $freeItem = null,
        public ?\Carbon\Carbon $requestedOn = null,
        public ?\Carbon\Carbon $shipOn = null,
        public ?string $shipComplete = null,
        public int|float|null $undershipThreshold = null,
        public int|float|null $overshipThreshold = null,
        public ?bool $completed = null,
        #[MapName('markForPO')]
        public ?bool $markForPo = null,
        public ?string $poSource = null,
        public ?string $lotSerialNbr = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?string $reasonCode = null,
        public ?SalesPersonInSalesOrderLineDto $salesPerson = null,
        public ?string $taxCategory = null,
        public ?bool $commissionable = null,
        #[MapName('alternateID')]
        public ?string $alternateId = null,
        public ?int $projectTask = null,
        public ?string $projectTaskCd = null,
        public ?SubaccountInSalesOrderLineDto $subaccount = null,
        public ?string $externalLink = null,
        public ?bool $isRotRutDeductible = null,
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
