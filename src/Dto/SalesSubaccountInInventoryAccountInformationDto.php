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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesSubaccountInInventoryAccountInformationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
