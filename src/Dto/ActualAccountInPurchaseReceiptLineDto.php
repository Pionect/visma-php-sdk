<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Accrual account &gt; The accrual account to record the item amount on the
 * purchase receipt; used for stock items and non-stock items for which a receipt is required.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ActualAccountInPurchaseReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ActualAccountInPurchaseReceiptLineDtoFactory factory()
 */
class ActualAccountInPurchaseReceiptLineDto extends Model
{
    #[Property]
    public ?string $type;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
