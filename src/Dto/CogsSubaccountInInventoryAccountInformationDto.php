<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Only used for Stock items.
 * COGS sub. &gt; The subaccount to be used for this item with the COGS
 * account.
 *
 * @method static \Pionect\VismaSdk\Factories\CogsSubaccountInInventoryAccountInformationDtoFactory testFactory()
 */
class CogsSubaccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
