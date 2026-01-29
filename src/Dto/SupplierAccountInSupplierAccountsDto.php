<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The supplier account information
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountInSupplierAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountInSupplierAccountsDtoFactory factory()
 */
class SupplierAccountInSupplierAccountsDto extends Model
{
    /** The supplier number */
    #[Property]
    public ?string $number;

    /** The supplier name */
    #[Property]
    public ?string $name;

    /** The default Expense Account ID for the supplier */
    #[Property]
    public ?string $accountId;

    #[Property]
    public ?subaccountInSupplierAccountDto $subaccount;
}
