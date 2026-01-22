<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CashTransactionUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $referenceNumber;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $tranDate;

    #[Property]
    public ?\finanacialPeriodInCashTransactionUpdateDto $finanacialPeriod;

    #[Property]
    public ?\financialPeriodInCashTransactionUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $cashAccount;

    #[Property]
    public ?\DtoValueOfString $entryType;

    #[Property]
    public ?\DtoValueOfString $documentRef;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $controlTotal;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $vatAmount;

    #[Property]
    public ?\DtoValueOfString $vatZone;

    #[Property]
    public ?\DtoValueOfNullableOfTaxCalcMode $taxCalculationMode;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?array $cashTransactionDetails;

    #[Property]
    public ?array $cashTransactionTaxDetails;
}
