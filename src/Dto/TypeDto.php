<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TypeDtoFactory factory()
 */
class TypeDto extends Model
{
    /** The type id of this fixed asset */
    #[Property]
    public ?string $assetTypeId;

    /** The type description */
    #[Property]
    public ?string $description;
}
