<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentPackageLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $confirmed;

    #[Property]
    public ?\DtoValueOfString $boxId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $weight;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $volume;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $declaredValue;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $codAmount;

    #[Property]
    public ?\DtoValueOfString $trackingNumber;

    #[Property]
    public ?\DtoValueOfString $customRefNbr1;

    #[Property]
    public ?\DtoValueOfString $customRefNbr2;
}
