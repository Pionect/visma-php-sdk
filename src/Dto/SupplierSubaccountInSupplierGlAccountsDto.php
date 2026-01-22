<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier sub &gt; The corresponding subaccount used to record the balance of supplier ledger
 * transactions related to the supplier.
 */
class SupplierSubaccountInSupplierGlAccountsDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
