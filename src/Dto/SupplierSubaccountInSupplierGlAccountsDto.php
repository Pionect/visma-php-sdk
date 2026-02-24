<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Supplier sub &gt; The corresponding subaccount used to record the balance of supplier ledger
 * transactions related to the supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierSubaccountInSupplierGlAccountsDtoFactory testFactory()
 */
class SupplierSubaccountInSupplierGlAccountsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierSubaccountInSupplierGlAccountsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
