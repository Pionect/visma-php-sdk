<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The type of the purchase receipt line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LineTypeInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LineTypeInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class LineTypeInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
