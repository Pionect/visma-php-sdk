<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerDebitNoteLinesUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $discountCode;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $domesticServicesDeductible;

    #[Property]
    public ?\DtoValueOfNullableOfRutRotItemTypes $itemType;

    #[Property]
    public ?\DtoValueOfString $typeOfWork;

    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfString $inventoryNumber;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfDecimal $unitPriceInCurrency;

    #[Property]
    public ?\DtoValueOfDecimal $manualAmountInCurrency;

    #[Property]
    public ?\DtoValueOfString $accountNumber;

    #[Property]
    public ?\DtoValueOfString $vatCodeId;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfDecimal $discountPercent;

    #[Property]
    public ?\DtoValueOfDecimal $discountAmountInCurrency;

    #[Property]
    public ?\DtoValueOfBoolean $manualDiscount;

    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?\DtoValueOfString $salesperson;

    #[Property]
    public ?\DtoValueOfInt32 $deferralSchedule;

    #[Property]
    public ?\DtoValueOfString $deferralCode;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termStartDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $termEndDate;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfString $branchNumber;
}
