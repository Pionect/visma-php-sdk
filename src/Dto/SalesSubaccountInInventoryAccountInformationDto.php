<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Sales sub. *&gt; The subaccount to be used for this item to record sales.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesSubaccountInInventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubaccountInInventoryAccountInformationDtoFactory factory()
 */
class SalesSubaccountInInventoryAccountInformationDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
