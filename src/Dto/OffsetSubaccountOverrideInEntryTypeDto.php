<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Offset account override &gt; The subaccount for this entry type to be used with this cash account
 * instead of the default offset subaccount specified in the Entry types window.
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetSubaccountOverrideInEntryTypeDtoFactory testFactory()
 */
class OffsetSubaccountOverrideInEntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
