<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** The line number of the Purchase Order line. */
    #[Property]
    public ?string $lineNbr;
}
