<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts tab &gt;
 */
class GlAccountsInSupplierDto extends Model
{
    #[Property]
    public ?\supplierAccountInSupplierGlAccountsDto $supplierAccount;

    #[Property]
    public ?\supplierSubaccountInSupplierGlAccountsDto $supplierSubaccount;

    #[Property]
    public ?\expenseAccountInSupplierGlAccountsDto $expenseAccount;

    #[Property]
    public ?\expenseAccountNonTaxInSupplierGlAccountsDto $expenseAccountNonTax;

    #[Property]
    public ?\expenseEUAccountInSupplierGlAccountsDto $expenseEuaccount;

    #[Property]
    public ?\expenseAccountImportInSupplierGlAccountsDto $expenseAccountImport;

    #[Property]
    public ?\expenseSubaccountInSupplierGlAccountsDto $expenseSubaccount;
}
