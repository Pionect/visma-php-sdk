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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CogsSubaccountInInventoryAccountInformationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
