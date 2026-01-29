<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeInventoryNbrActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeInventoryNbrActionDtoFactory factory()
 */
class ChangeInventoryNbrActionDto extends Model
{
    #[Property]
    public ?string $inventoryNbr;
}
