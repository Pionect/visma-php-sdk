<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A check box that you select to give the receipt the On Hold status. Clear the check box to save
 * the receipt with the Balanced status.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\HoldInInventoryTransferUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\HoldInInventoryTransferUpdateDtoFactory factory()
 */
class HoldInInventoryTransferUpdateDto extends Model
{
    public function __construct(
        public ?bool $value = null,
    ) {}
}
