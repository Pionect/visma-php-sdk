<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Expense account, import &gt; The import expense account used to record expenses made to the
 * suppliers of this class.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseAccountImportInSupplierGlAccountsDtoFactory testFactory()
 */
class ExpenseAccountImportInSupplierGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
