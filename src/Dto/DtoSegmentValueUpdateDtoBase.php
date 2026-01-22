<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoSegmentValueUpdateDtoBase extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?string $value;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfBoolean $active;
}
