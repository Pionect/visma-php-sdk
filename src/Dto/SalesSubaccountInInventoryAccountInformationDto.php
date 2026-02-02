<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Sales sub. *&gt; The subaccount to be used for this item to record sales.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesSubaccountInInventoryAccountInformationDtoFactory testFactory()
 */
class SalesSubaccountInInventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
