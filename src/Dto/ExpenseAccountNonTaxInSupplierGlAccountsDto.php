<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expence acct, non-taxable &gt; The non-taxable expense account used to record expenses made to the
 * suppliers of this class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory factory()
 */
class ExpenseAccountNonTaxInSupplierGlAccountsDto extends Model
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
