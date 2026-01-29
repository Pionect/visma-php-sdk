<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountDtoFactory factory()
 */
class SupplierAccountDto extends Model
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
