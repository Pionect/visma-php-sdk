<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryUpdateDto extends Model
{
    #[Property]
    public ?\inventoryNumberInInventoryUpdateDto $inventoryNumber;

    #[Property]
    public ?\DtoValueOfInventoryStatus $status;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $body;

    #[Property]
    public ?\itemClassInInventoryUpdateDto $itemClass;

    #[Property]
    public ?\postingClassInInventoryUpdateDto $postingClass;

    #[Property]
    public ?\vatCodeInInventoryUpdateDto $vatCode;

    #[Property]
    public ?\defaultPriceInInventoryUpdateDto $defaultPrice;

    #[Property]
    public ?\DtoValueOfString $baseUnit;

    #[Property]
    public ?\DtoValueOfString $salesUnit;

    #[Property]
    public ?\DtoValueOfString $purchaseUnit;

    #[Property]
    public ?\expenseAccrualAccountInInventoryUpdateDto $expenseAccrualAccount;

    #[Property]
    public ?\inventoryAccountInInventoryUpdateDto $inventoryAccount;

    #[Property]
    public ?\expenseAccountInInventoryUpdateDto $expenseAccount;

    #[Property]
    public ?\cogsAccountInInventoryUpdateDto $cogsAccount;

    #[Property]
    public ?\DtoValueOfString $expenseNonTaxableAccount;

    #[Property]
    public ?\DtoValueOfString $expenseEuAccount;

    #[Property]
    public ?\DtoValueOfString $expenseImportAccount;

    /** Only used for Non-stock items */
    #[Property]
    public ?array $expenseSubaccount;

    /** Only used for Stock items */
    #[Property]
    public ?array $cogsSubaccount;

    #[Property]
    public ?\DtoValueOfString $salesAccount;

    #[Property]
    public ?\DtoValueOfString $salesNonTaxableAccount;

    #[Property]
    public ?\DtoValueOfString $salesEuAccount;

    #[Property]
    public ?\DtoValueOfString $salesExportAccount;

    #[Property]
    public ?array $salesSubaccount;

    #[Property]
    public ?array $attributeLines;

    #[Property]
    public ?\PackagingUpdateDto $packaging;

    #[Property]
    public ?array $supplierDetails;

    #[Property]
    public ?\IntrastatUpdateDto $intrastat;

    #[Property]
    public ?array $crossReferences;

    #[Property]
    public ?\defaultWarehouseInInventoryUpdateDto $defaultWarehouse;

    #[Property]
    public ?\defaultIssueFromInInventoryUpdateDto $defaultIssueFrom;

    #[Property]
    public ?\defaultReceiptToInInventoryUpdateDto $defaultReceiptTo;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $kitItem;

    #[Property]
    public ?\DtoValueOfString $note;
}
