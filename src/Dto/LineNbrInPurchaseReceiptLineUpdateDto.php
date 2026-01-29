<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The number of the purchase receipt line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LineNbrInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LineNbrInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class LineNbrInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
