<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Only used for Stock items.
 * COGS sub. &gt; The subaccount to be used for this item with the COGS
 * account.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CogsSubaccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CogsSubaccountInInventoryAccountInformationDtoFactory testFactory()
 */
class CogsSubaccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
