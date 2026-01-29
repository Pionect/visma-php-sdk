<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory factory()
 */
class SupplierAccountsDto extends Model
{
    #[Property]
    public ?supplierAccountInSupplierAccountsDto $supplierAccount;

    /** The list of SUpplierItems Ids with their expense accounts */
    #[Property]
    public ?array $supplierItemAccounts;
}
