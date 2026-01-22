<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ClassAttributeDto extends Model
{
    /** The Attributes tab &gt; Attribute ID &gt; The identifier of the attribute. */
    #[Property]
    public ?string $attributeId;

    /** The Attributes tab &gt; Description &gt; A read-only column that displays the detailed description of the attribute. */
    #[Property]
    public ?string $description;

    /** The Attributes tab &gt; Sort order &gt; A number that represents the order of the attribute in the list of class attributes.The lower the number, the higher the attribute will be in the list of class attributes. */
    #[Property]
    public ?int $sortOrder;

    /** The Attributes tab &gt; Required &gt; This check box indicates (if selected) that the attribute value is required for items of the class. */
    #[Property]
    public ?bool $required;

    #[Property]
    public ?string $attributeType;

    /** The Attributes tab &gt; Default value &gt; The default value of the attribute. */
    #[Property]
    public ?string $defaultValue;

    #[Property]
    public ?array $details;
}
