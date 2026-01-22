<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AttributeLineUpdateDto extends Model
{
    #[Property]
    public ?\attributeIdInAttributeLineUpdateDto $attributeId;

    #[Property]
    public ?\DtoValueOfString $attributeValue;
}
