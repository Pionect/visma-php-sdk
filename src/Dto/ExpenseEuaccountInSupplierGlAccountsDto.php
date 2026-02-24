<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expence EU account &gt; The EU expense account used to record expenses made to the suppliers of this
 * class.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseEuaccountInSupplierGlAccountsDtoFactory testFactory()
 */
class ExpenseEuaccountInSupplierGlAccountsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseEuaccountInSupplierGlAccountsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
