<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLineDtoFactory testFactory()
 */
class SupplierInvoiceLineDto extends Model
{
    public function __construct(
        public ?int $lineNumber = null,
        public ?string $inventoryNumber = null,
        public ?string $externalInventoryId = null,
        public ?bool $stockItem = null,
        public ?string $transactionDescription = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public int|float|null $unitCost = null,
        public int|float|null $unitCostInCurrency = null,
        public int|float|null $cost = null,
        public int|float|null $costInCurrency = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public int|float|null $discountAmountInCurrency = null,
        public int|float|null $discountUnitCost = null,
        public int|float|null $discountUnitCostInCurrency = null,
        public ?bool $manualDiscount = null,
        public ?AccountInSupplierInvoiceLineDto $account = null,
        public ?SubaccountInSupplierInvoiceLineDto $subaccount = null,
        public ?PrebookAccountInSupplierInvoiceLineDto $prebookAccount = null,
        public ?PrebookSubaccountInSupplierInvoiceLineDto $prebookSubaccount = null,
        public ?int $deferralSchedule = null,
        public ?string $deferralScheduleNbr = null,
        public ?string $deferralCode = null,
        public ?VatCodeInSupplierInvoiceLineDto $vatCode = null,
        public ?string $poNumber = null,
        public ?int $poLineNr = null,
        public ?string $poReceiptNbr = null,
        public ?int $poReceiptLineNbr = null,
        public ?BranchNumberInSupplierInvoiceLineDto $branchNumber = null,
        public ?string $note = null,
        public ?string $splitHierarchy = null,
        public ?ProjectInSupplierInvoiceLineDto $project = null,
        public ?ProjectTaskInSupplierInvoiceLineDto $projectTask = null,
        public ?array $attachments = null,
        public int|float|null $retainagePct = null,
        public int|float|null $curyRetainageAmt = null,
        public ?\Carbon\Carbon $termStartDate = null,
        public ?\Carbon\Carbon $termEndDate = null,
    ) {}
}
