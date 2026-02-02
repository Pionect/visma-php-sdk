<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expense account &gt; The expense account used to record expenses incurred for the supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInSupplierGlAccountsDtoFactory testFactory()
 */
class ExpenseAccountInSupplierGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
