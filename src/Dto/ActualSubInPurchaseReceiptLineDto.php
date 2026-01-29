<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Accrual sub. &gt; The subaccount used to record the item amount on the
 * purchase receipt, used for stock items and non-stock items for which a receipt is required.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ActualSubInPurchaseReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ActualSubInPurchaseReceiptLineDtoFactory factory()
 */
class ActualSubInPurchaseReceiptLineDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
