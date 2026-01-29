<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeIdValueDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeIdValueDtoFactory factory()
 */
class AttributeIdValueDto extends Model
{
    #[Property]
    public ?string $id;

    /** Value &gt; The value of the attribute. */
    #[Property]
    public ?string $value;

    /** Attribute &gt; The description of the attribute. */
    #[Property]
    public ?string $description;
}
