<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class RotRutUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfBoolean $distributedAutomaticaly;

    #[Property]
    public ?\DtoValueOfString $appartment;

    #[Property]
    public ?\DtoValueOfString $estate;

    #[Property]
    public ?\DtoValueOfString $organizationNbr;

    #[Property]
    public ?array $distribution;
}
