<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SalesPersonUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $salespersonId;

    #[Property]
    public ?\DtoValueOfString $name;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isActive;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $commissionPct;

    #[Property]
    public ?\DtoValueOfString $salesSub;

    #[Property]
    public ?array $customers;
}
