<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeInventoryNbrActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeInventoryNbrActionDtoFactory testFactory()
 */
class ChangeInventoryNbrActionDto extends Model
{
    public function __construct(
        public ?string $inventoryNbr = null,
    ) {}
}
