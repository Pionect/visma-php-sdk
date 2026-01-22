<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierAccountsDto extends Model
{
    #[Property]
    public ?\supplierAccountInSupplierAccountsDto $supplierAccount;

    /** The list of SUpplierItems Ids with their expense accounts */
    #[Property]
    public ?array $supplierItemAccounts;
}
