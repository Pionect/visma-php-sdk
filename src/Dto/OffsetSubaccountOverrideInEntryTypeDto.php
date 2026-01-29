<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Offset account override &gt; The subaccount for this entry type to be used with this cash account
 * instead of the default offset subaccount specified in the Entry types window.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetSubaccountOverrideInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetSubaccountOverrideInEntryTypeDtoFactory factory()
 */
class OffsetSubaccountOverrideInEntryTypeDto extends Model
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
