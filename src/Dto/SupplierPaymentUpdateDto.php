<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierPaymentUpdateDto extends Model
{
    #[Property]
    public ?\typeInSupplierPaymentUpdateDto $type;

    #[Property]
    public ?\DtoValueOfString $referenceNumber;

    #[Property]
    public ?\DtoValueOfBoolean $hold;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $applicationDate;

    #[Property]
    public ?\DtoValueOfString $applicationPeriod;

    #[Property]
    public ?\DtoValueOfString $paymentRef;

    #[Property]
    public ?\DtoValueOfString $supplier;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $paymentMethod;

    #[Property]
    public ?\DtoValueOfString $cashAccount;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $paymentAmount;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?array $paymentLines;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;
}
