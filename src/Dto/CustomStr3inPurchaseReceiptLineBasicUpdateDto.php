<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr3inPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr3inPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class CustomStr3inPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
