<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GlAccountsInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GlAccountsInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierAccount' => SupplierAccountInSupplierGlAccountsDtoFactory::new()->make(),
            'supplierSubaccount' => SupplierSubaccountInSupplierGlAccountsDtoFactory::new()->make(),
            'expenseAccount' => ExpenseAccountInSupplierGlAccountsDtoFactory::new()->make(),
            'expenseAccountNonTax' => ExpenseAccountNonTaxInSupplierGlAccountsDtoFactory::new()->make(),
            'expenseEuaccount' => ExpenseEUAccountInSupplierGlAccountsDtoFactory::new()->make(),
            'expenseAccountImport' => ExpenseAccountImportInSupplierGlAccountsDtoFactory::new()->make(),
            'expenseSubaccount' => ExpenseSubaccountInSupplierGlAccountsDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return GlAccountsInSupplierDto::class;
    }
}
