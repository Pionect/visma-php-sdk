<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A brief description of the inventory issue or its transactions.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInInventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInInventoryReceiptUpdateDtoFactory testFactory()
 */
class DescriptionInInventoryReceiptUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
