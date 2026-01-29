<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The price of the item. This price is used as the default price, if there are no other prices set.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultPriceInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultPriceInInventoryUpdateDtoFactory factory()
 */
class DefaultPriceInInventoryUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
