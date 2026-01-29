<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; A check box that indicates to the system (if selected) that the
 * purchase order line added to this receipt line should be considered completed upon release of this
 * purchase receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CompletePoLineInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CompletePoLineInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class CompletePoLineInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?bool $value;
}
