<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reclassification account override &gt; The account that should be used as the offset account for
 * this entry type with this cash account instead of the default offset account specified on the Entry
 * types tab.
 * We recommend that for the disbursement type of transaction, you specify an expense
 * account. For the receipt type of transaction, specify an asset account.
 */
class OffsetAccountOverrideInEntryTypeDto extends Model
{
    /** Account class &gt; The identifier of the account class. */
    #[Property]
    public ?string $externalCode1;

    /** Account class &gt; The name of the account class. */
    #[Property]
    public ?string $externalCode2;

    #[Property]
    public ?bool $active;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
