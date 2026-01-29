<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PropertyTaxDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PropertyTaxDtoFactory factory()
 */
class PropertyTaxDto extends Model
{
    /** The property tax group id of this fixed asset */
    #[Property]
    public ?string $propertyTaxId;

    /** The description of the property tax group of this fixed asset */
    #[Property]
    public ?string $description;
}
