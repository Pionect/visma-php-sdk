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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
