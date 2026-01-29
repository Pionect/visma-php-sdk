<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The automatically calculated or manually entered discount amount on
 * the line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountAmountInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountAmountInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class DiscountAmountInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
