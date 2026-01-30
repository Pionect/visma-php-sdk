<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The number of the purchase receipt line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LineNbrInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LineNbrInPurchaseReceiptLineUpdateDtoFactory testFactory()
 */
class LineNbrInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
