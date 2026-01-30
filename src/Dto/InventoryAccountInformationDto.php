<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryAccountInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryAccountInformationDtoFactory factory()
 */
class InventoryAccountInformationDto extends Model
{
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
