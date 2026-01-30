<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierGlAccountsDtoFactory testFactory()
 */
class SupplierGlAccountsDto extends Model
{
    public function __construct(
        public ?SupplierAccountInSupplierGlAccountsDto $supplierAccount = null,
        public ?SupplierSubaccountInSupplierGlAccountsDto $supplierSubaccount = null,
        public ?ExpenseAccountInSupplierGlAccountsDto $expenseAccount = null,
        public ?ExpenseAccountNonTaxInSupplierGlAccountsDto $expenseAccountNonTax = null,
        #[MapName('expenseEUAccount')]
        public ?ExpenseEuaccountInSupplierGlAccountsDto $expenseEuaccount = null,
        public ?ExpenseAccountImportInSupplierGlAccountsDto $expenseAccountImport = null,
        public ?ExpenseSubaccountInSupplierGlAccountsDto $expenseSubaccount = null,
    ) {}
}
