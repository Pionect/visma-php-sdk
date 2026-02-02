<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Default offset subaccount &gt; The corresponding subaccount.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultOffsetSubaccountInEntryTypeDtoFactory testFactory()
 */
class DefaultOffsetSubaccountInEntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
