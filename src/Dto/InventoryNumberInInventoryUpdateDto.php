<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory for POST, not applicable for PUT. The unique alphanumeric identifier of the  item that is
 * used in UI.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryNumberInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryNumberInInventoryUpdateDtoFactory factory()
 */
class InventoryNumberInInventoryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
