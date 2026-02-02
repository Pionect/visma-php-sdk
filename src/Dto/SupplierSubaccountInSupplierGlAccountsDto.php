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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
