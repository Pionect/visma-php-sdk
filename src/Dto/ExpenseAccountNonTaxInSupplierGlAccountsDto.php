<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expence acct, non-taxable &gt; The non-taxable expense account used to record expenses made to the
 * suppliers of this class.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory testFactory()
 */
class ExpenseAccountNonTaxInSupplierGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
