<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Stocktake line in StocktakeContoller. Used to update a Stocktake line
 */
class StocktakeLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $physicalQuantity;

    #[Property]
    public ?\DtoValueOfString $inventoryId;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\DtoValueOfString $reasonCode;

    #[Property]
    public ?\DtoValueOfString $lotSerialNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;
}
