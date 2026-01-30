<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The manually entered summary amount for all specified inventory receipt items.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ControlCostInInventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ControlCostInInventoryReceiptUpdateDtoFactory factory()
 */
class ControlCostInInventoryReceiptUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
