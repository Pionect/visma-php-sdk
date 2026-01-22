<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AttributeUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $attributeId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $internal;

    #[Property]
    public ?\DtoValueOfAttributeControlType $controlType;

    #[Property]
    public ?\DtoValueOfString $entryMask;

    #[Property]
    public ?\DtoValueOfString $regExp;

    #[Property]
    public ?array $details;
}
