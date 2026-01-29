<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A brief description of the inventory issue or its transactions.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInInventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInInventoryReceiptUpdateDtoFactory factory()
 */
class DescriptionInInventoryReceiptUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
