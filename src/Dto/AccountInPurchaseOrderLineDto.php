<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Account &gt; The expense account used to record the purchased non-stock item that does not require
 * receipt (by default, the account specified for the item in the Combine COGS/expense sub. from field
 * in the Posting classes (IN206000) window).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInPurchaseOrderLineDtoFactory factory()
 */
class AccountInPurchaseOrderLineDto extends Model
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
