<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryAccountInformationDto extends Model
{
    #[Property]
    public ?expenseAccrualAccountInInventoryAccountInformationDto $expenseAccrualAccount;

    #[Property]
    public ?inventoryAccountInInventoryAccountInformationDto $inventoryAccount;

    #[Property]
    public ?expenseAccountInInventoryAccountInformationDto $expenseAccount;

    #[Property]
    public ?cogsAccountInInventoryAccountInformationDto $cogsAccount;

    #[Property]
    public ?expenseNonTaxableAccountInInventoryAccountInformationDto $expenseNonTaxableAccount;

    #[Property]
    public ?expenseEuAccountInInventoryAccountInformationDto $expenseEuAccount;

    #[Property]
    public ?expenseImportAccountInInventoryAccountInformationDto $expenseImportAccount;

    #[Property]
    public ?expenseSubaccountInInventoryAccountInformationDto $expenseSubaccount;

    #[Property]
    public ?cogsSubaccountInInventoryAccountInformationDto $cogsSubaccount;

    #[Property]
    public ?salesAccountInInventoryAccountInformationDto $salesAccount;

    #[Property]
    public ?salesNonTaxableAccountInInventoryAccountInformationDto $salesNonTaxableAccount;

    #[Property]
    public ?salesEuAccountInInventoryAccountInformationDto $salesEuAccount;

    #[Property]
    public ?salesExportAccountInInventoryAccountInformationDto $salesExportAccount;

    #[Property]
    public ?salesSubaccountInInventoryAccountInformationDto $salesSubaccount;
}
