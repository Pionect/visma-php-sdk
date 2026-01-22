<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DiscountBreakpointUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $pendingBreakAmount;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $pendingDate;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $pendingDiscountPercent;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $pendingDiscountAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $pendingBreakQuantity;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $breakAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountPercent;
}
