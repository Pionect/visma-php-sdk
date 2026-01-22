<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class RotRutDistributionUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfString $personalId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $extra;
}
