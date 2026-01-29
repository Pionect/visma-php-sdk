<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Stock items
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CogsAccountInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CogsAccountInInventoryUpdateDtoFactory factory()
 */
class CogsAccountInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
