<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitAssemblyNonStockComponentsUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfString $itemId;

    #[Property]
    public ?\DtoValueOfString $uoM;

    #[Property]
    public ?\DtoValueOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfDecimal $unitCost;

    #[Property]
    public ?\DtoValueOfString $reasonCode;
}
