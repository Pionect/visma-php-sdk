<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The description of this account.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class AccountDescriptionInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
