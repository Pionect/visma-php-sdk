<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentDetailLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $warehouse;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $shippedQty;

    #[Property]
    public ?\DtoValueOfString $lotSerialNbr;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?\DtoValueOfString $reasonCode;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?array $allocations;

    #[Property]
    public ?\customStr1InShipmentDetailLineUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InShipmentDetailLineUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InShipmentDetailLineUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InShipmentDetailLineUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InShipmentDetailLineUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InShipmentDetailLineUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InShipmentDetailLineUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InShipmentDetailLineUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InShipmentDetailLineUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InShipmentDetailLineUpdateDto $customDateTimeUtc1;
}
