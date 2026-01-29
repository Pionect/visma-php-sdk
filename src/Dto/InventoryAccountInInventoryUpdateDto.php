<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Stock items
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAccountInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAccountInInventoryUpdateDtoFactory factory()
 */
class InventoryAccountInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
