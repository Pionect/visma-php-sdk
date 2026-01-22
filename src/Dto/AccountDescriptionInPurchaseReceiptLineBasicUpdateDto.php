<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The description of this account.
 */
class AccountDescriptionInPurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
