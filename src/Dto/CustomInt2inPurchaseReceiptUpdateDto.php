<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt2inPurchaseReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt2inPurchaseReceiptUpdateDtoFactory factory()
 */
class CustomInt2inPurchaseReceiptUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
