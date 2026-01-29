<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Default offset subaccount &gt; The corresponding subaccount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultOffsetSubaccountInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetSubaccountInEntryTypeDtoFactory factory()
 */
class DefaultOffsetSubaccountInEntryTypeDto extends Model
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
