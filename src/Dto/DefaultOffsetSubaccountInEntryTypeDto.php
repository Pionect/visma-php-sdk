<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Default offset subaccount &gt; The corresponding subaccount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultOffsetSubaccountInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetSubaccountInEntryTypeDtoFactory testFactory()
 */
class DefaultOffsetSubaccountInEntryTypeDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
