<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The unit of measure (UoM) used for the purchased or transferred item.
 * By default, it is the purchase unit.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UomInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UomInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class UomInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
