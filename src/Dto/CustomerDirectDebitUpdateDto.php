<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerDirectDebitUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?string $id;

    #[Property]
    public ?\DtoValueOfString $mandateId;

    #[Property]
    public ?\DtoValueOfString $mandateDescription;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dateOfSignature;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isDefault;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $oneTime;

    #[Property]
    public ?\DtoValueOfString $bic;

    #[Property]
    public ?\DtoValueOfString $iban;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastCollectionDate;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $maxAmount;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?\DtoValueOfString $branch;
}
