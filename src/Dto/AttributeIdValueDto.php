<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AttributeIdValueDto extends Model
{
    /** Value &gt; The value of the attribute. */
    #[Property]
    public ?string $value;

    /** Attribute &gt; The description of the attribute. */
    #[Property]
    public ?string $description;
}
