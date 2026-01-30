<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The account used to record the item amount on the purchase receipt;
 * used for non-stock items for which receipt is not required.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountIdInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountIdInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class AccountIdInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
