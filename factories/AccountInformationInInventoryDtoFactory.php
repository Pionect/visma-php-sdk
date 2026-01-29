<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountInformationInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountInformationInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'expenseAccrualAccount' => ExpenseAccrualAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'inventoryAccount' => InventoryAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'expenseAccount' => ExpenseAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'cogsAccount' => CogsAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'expenseNonTaxableAccount' => ExpenseNonTaxableAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'expenseEuAccount' => ExpenseEuAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'expenseImportAccount' => ExpenseImportAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'expenseSubaccount' => ExpenseSubaccountInInventoryAccountInformationDtoFactory::new()->make(),
            'cogsSubaccount' => CogsSubaccountInInventoryAccountInformationDtoFactory::new()->make(),
            'salesAccount' => SalesAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'salesNonTaxableAccount' => SalesNonTaxableAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'salesEuAccount' => SalesEuAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'salesExportAccount' => SalesExportAccountInInventoryAccountInformationDtoFactory::new()->make(),
            'salesSubaccount' => SalesSubaccountInInventoryAccountInformationDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountInformationInInventoryDto::class;
    }
}
