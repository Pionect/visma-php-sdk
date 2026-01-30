<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type DateTime - in UTC timezone
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomDateTimeUtc1inPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomDateTimeUtc1inPurchaseReceiptLineUpdateDtoFactory factory()
 */
class CustomDateTimeUtc1inPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
