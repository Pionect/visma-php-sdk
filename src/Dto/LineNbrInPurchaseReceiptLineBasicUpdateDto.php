<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The number of the purchase receipt line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LineNbrInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LineNbrInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class LineNbrInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
