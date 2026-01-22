<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DiscountUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $discountCode;

    #[Property]
    public ?\DtoValueOfString $series;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $discountBy;

    #[Property]
    public ?\DtoValueOfString $breakBy;

    #[Property]
    public ?\DtoValueOfBoolean $promotional;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $active;

    #[Property]
    public ?\DtoValueOfBoolean $prorateDiscount;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?array $discountBreakpoints;
}
