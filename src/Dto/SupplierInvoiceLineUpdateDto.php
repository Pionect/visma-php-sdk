<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierInvoiceLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $inventoryNumber;

    #[Property]
    public ?\DtoValueOfString $transactionDescription;

    #[Property]
    public ?\DtoValueOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitCostInCurrency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $costInCurrency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountPercent;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountAmountInCurrency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountUnitCostInCurrency;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $manualDiscount;

    #[Property]
    public ?\DtoValueOfString $accountNumber;

    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $deferralSchedule;

    #[Property]
    public ?\DtoValueOfString $deferralCode;

    #[Property]
    public ?\DtoValueOfString $vatCodeId;

    #[Property]
    public ?\branchInSupplierInvoiceLineUpdateDto $branch;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfString $projectId;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $projectInternalId;

    #[Property]
    public ?\DtoValueOfString $projectTaskId;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $projectTaskInternalId;

    #[Property]
    public ?\DtoValueOfBoolean $splitLine;

    #[Property]
    public ?\DtoValueOfBoolean $undoSplitLine;

    #[Property]
    public ?\DtoValueOfString $splitHierarchy;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $retainagePct;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $curyRetainageAmt;

    #[Property]
    public ?\LinkLineDto $linkLine;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termStartDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termEndDate;

    #[Property]
    public ?\DtoValueOfString $externalInventoryId;

    #[Property]
    public ?\prebookAccountNumberInSupplierInvoiceLineUpdateDto $prebookAccountNumber;

    /** Subaccount used for prebooking. Note that this feature is not available for all countries. */
    #[Property]
    public ?array $prebookSubaccount;
}
