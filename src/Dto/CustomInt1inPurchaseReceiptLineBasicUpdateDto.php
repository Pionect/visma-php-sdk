<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt1inPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt1inPurchaseReceiptLineBasicUpdateDtoFactory testFactory()
 */
class CustomInt1inPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
