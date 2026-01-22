<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentDetailLineAddDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfString $inventoryNumber;

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
    public ?\customStr1InShipmentDetailLineAddDto $customStr1;

    #[Property]
    public ?\customStr2InShipmentDetailLineAddDto $customStr2;

    #[Property]
    public ?\customStr3InShipmentDetailLineAddDto $customStr3;

    #[Property]
    public ?\customStr4InShipmentDetailLineAddDto $customStr4;

    #[Property]
    public ?\customStr5InShipmentDetailLineAddDto $customStr5;

    #[Property]
    public ?\customDec1InShipmentDetailLineAddDto $customDec1;

    #[Property]
    public ?\customDec2InShipmentDetailLineAddDto $customDec2;

    #[Property]
    public ?\customInt1InShipmentDetailLineAddDto $customInt1;

    #[Property]
    public ?\customInt2InShipmentDetailLineAddDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InShipmentDetailLineAddDto $customDateTimeUtc1;
}
