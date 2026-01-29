<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a collection of Purchase Orders reference numbers and associated line numbers.
 * Used to add Purchase Order lines to a Purchase Receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesListUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderLinesListUpdateDtoFactory factory()
 */
class PurchaseReceiptOrderLinesListUpdateDto extends Model
{
    /** The collection of Purchase Order reference numbers and their lines. */
    #[Property]
    public ?array $purchaseOrderLines;
}
