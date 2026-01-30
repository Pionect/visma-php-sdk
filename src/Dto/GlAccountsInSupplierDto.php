<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * General ledger accounts tab &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlAccountsInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlAccountsInSupplierDtoFactory factory()
 */
class GlAccountsInSupplierDto extends Model
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
