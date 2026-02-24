<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierGlAccountsDtoFactory testFactory()
 */
class SupplierGlAccountsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierGlAccountsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
