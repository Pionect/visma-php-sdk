<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Discount Detail for Purchase Order in Purchase Order Controller. Used to pass
 * data to server for creating or updating an order
 */
class DiscountDetailUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $skipDiscount;

    #[Property]
    public ?\DtoValueOfString $discountCode;

    #[Property]
    public ?\DtoValueOfString $sequanceId;
}
