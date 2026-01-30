<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expence acct, non-taxable &gt; The non-taxable expense account used to record expenses made to the
 * suppliers of this class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory testFactory()
 */
class ExpenseAccountNonTaxInSupplierGlAccountsDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
