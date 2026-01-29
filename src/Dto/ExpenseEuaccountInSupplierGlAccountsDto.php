<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expence EU account &gt; The EU expense account used to record expenses made to the suppliers of this
 * class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseEuaccountInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseEuaccountInSupplierGlAccountsDtoFactory factory()
 */
class ExpenseEuaccountInSupplierGlAccountsDto extends Model
{
    #[Property]
    public ?string $type;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
