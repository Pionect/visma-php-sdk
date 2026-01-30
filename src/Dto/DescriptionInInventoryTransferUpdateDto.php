<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A brief description of the inventory issue or its transactions.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInInventoryTransferUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInInventoryTransferUpdateDtoFactory testFactory()
 */
class DescriptionInInventoryTransferUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
