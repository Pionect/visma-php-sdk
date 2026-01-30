<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Expense account &gt; The expense account used to record expenses incurred for the supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseAccountInSupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountInSupplierGlAccountsDtoFactory factory()
 */
class ExpenseAccountInSupplierGlAccountsDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
