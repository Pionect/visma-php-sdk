<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier sub &gt; The corresponding subaccount used to record the balance of supplier ledger
 * transactions related to the supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierSubaccountInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierSubaccountInSupplierGlAccountsDtoFactory factory()
 */
class SupplierSubaccountInSupplierGlAccountsDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
