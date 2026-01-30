<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Represents a Purchase Order line number to add to a Purchase Receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderLineNbrUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderLineNbrUpdateDtoFactory factory()
 */
class PurchaseReceiptOrderLineNbrUpdateDto extends Model
{
    public function __construct(
        public ?string $lineNbr = null,
    ) {}
}
