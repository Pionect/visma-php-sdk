<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The type of the purchase order related to this purchase receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PoOrderTypeInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PoOrderTypeInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class PoOrderTypeInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
