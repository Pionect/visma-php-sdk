<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierPaymentAdjustmentUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfSupplierInvoiceTypes $documentType;

    #[Property]
    public ?\DtoValueOfString $refNbr;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $amountPaid;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $cashDiscountTaken;

    #[Property]
    public ?\DtoValueOfDecimal $crossRate;
}
