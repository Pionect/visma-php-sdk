<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expense sub &gt; The corresponding subaccount used to record expenses incurred for the supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseSubaccountInSupplierGlAccountsDtoFactory testFactory()
 */
class ExpenseSubaccountInSupplierGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
