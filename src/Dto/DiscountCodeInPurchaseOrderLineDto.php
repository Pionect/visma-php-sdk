<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Discount code &gt; The code of the line discount that has been applied to this line automatically.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCodeInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeInPurchaseOrderLineDtoFactory factory()
 */
class DiscountCodeInPurchaseOrderLineDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
