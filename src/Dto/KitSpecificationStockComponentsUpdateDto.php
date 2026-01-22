<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class KitSpecificationStockComponentsUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfString $compInventoryId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $dfltCompQty;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $allowQtyVariation;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $minCompQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $maxCompQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $disassemblyCoeff;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $allowSubstitution;
}
