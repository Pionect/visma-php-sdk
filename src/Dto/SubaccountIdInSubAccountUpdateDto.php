<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property is now considered obsolete, use SubaccountNumber instead. If SubaccountNumber is
 * specified in a request, this property is ignored.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountIdInSubAccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountIdInSubAccountUpdateDtoFactory factory()
 */
class SubaccountIdInSubAccountUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
