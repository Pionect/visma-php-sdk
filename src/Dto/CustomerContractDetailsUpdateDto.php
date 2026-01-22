<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerContractDetailsUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $contractDetailId;

    #[Property]
    public ?\DtoValueOfString $itemCode;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $included;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $setupPrice;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $recurringPrice;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $extraUsagePrice;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $renewalPrice;
}
