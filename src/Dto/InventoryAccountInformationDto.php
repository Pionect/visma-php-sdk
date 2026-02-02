<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryAccountInformationDtoFactory testFactory()
 */
class InventoryAccountInformationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?ExpenseAccrualAccountInInventoryAccountInformationDto $expenseAccrualAccount = null,
        public ?InventoryAccountInInventoryAccountInformationDto $inventoryAccount = null,
        public ?ExpenseAccountInInventoryAccountInformationDto $expenseAccount = null,
        public ?CogsAccountInInventoryAccountInformationDto $cogsAccount = null,
        public ?ExpenseNonTaxableAccountInInventoryAccountInformationDto $expenseNonTaxableAccount = null,
        public ?ExpenseEuAccountInInventoryAccountInformationDto $expenseEuAccount = null,
        public ?ExpenseImportAccountInInventoryAccountInformationDto $expenseImportAccount = null,
        public ?ExpenseSubaccountInInventoryAccountInformationDto $expenseSubaccount = null,
        public ?CogsSubaccountInInventoryAccountInformationDto $cogsSubaccount = null,
        public ?SalesAccountInInventoryAccountInformationDto $salesAccount = null,
        public ?SalesNonTaxableAccountInInventoryAccountInformationDto $salesNonTaxableAccount = null,
        public ?SalesEuAccountInInventoryAccountInformationDto $salesEuAccount = null,
        public ?SalesExportAccountInInventoryAccountInformationDto $salesExportAccount = null,
        public ?SalesSubaccountInInventoryAccountInformationDto $salesSubaccount = null,
    ) {}
}
