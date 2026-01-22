<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PaymentLinesUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfDecimal $cashDiscountTaken;

    #[Property]
    public ?\DtoValueOfDecimal $balanceWriteOff;

    #[Property]
    public ?\DtoValueOfString $writeOffReasonCode;

    #[Property]
    public ?\DtoValueOfDecimal $crossRate;

    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfCustomerDocumentTypes $documentType;

    #[Property]
    public ?\DtoValueOfString $refNbr;

    #[Property]
    public ?\DtoValueOfDecimal $amountPaid;
}
