<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryUpdateDtoFactory factory()
 */
class InventoryUpdateDto extends Model
{
    #[Property]
    public ?inventoryNumberInInventoryUpdateDto $inventoryNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $status;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $type;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $body;

    #[Property]
    public ?itemClassInInventoryUpdateDto $itemClass;

    #[Property]
    public ?postingClassInInventoryUpdateDto $postingClass;

    #[Property]
    public ?vatCodeInInventoryUpdateDto $vatCode;

    #[Property]
    public ?defaultPriceInInventoryUpdateDto $defaultPrice;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $baseUnit;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesUnit;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $purchaseUnit;

    #[Property]
    public ?expenseAccrualAccountInInventoryUpdateDto $expenseAccrualAccount;

    #[Property]
    public ?inventoryAccountInInventoryUpdateDto $inventoryAccount;

    #[Property]
    public ?expenseAccountInInventoryUpdateDto $expenseAccount;

    #[Property]
    public ?cogsAccountInInventoryUpdateDto $cogsAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseNonTaxableAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseEuAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $expenseImportAccount;

    /** Only used for Non-stock items */
    #[Property]
    public ?array $expenseSubaccount;

    /** Only used for Stock items */
    #[Property]
    public ?array $cogsSubaccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesNonTaxableAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesEuAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $salesExportAccount;

    #[Property]
    public ?array $salesSubaccount;

    #[Property]
    public ?array $attributeLines;

    #[Property]
    public ?PackagingUpdateDto $packaging;

    #[Property]
    public ?array $supplierDetails;

    #[Property]
    public ?IntrastatUpdateDto $intrastat;

    #[Property]
    public ?array $crossReferences;

    #[Property]
    public ?defaultWarehouseInInventoryUpdateDto $defaultWarehouse;

    #[Property]
    public ?defaultIssueFromInInventoryUpdateDto $defaultIssueFrom;

    #[Property]
    public ?defaultReceiptToInInventoryUpdateDto $defaultReceiptTo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $kitItem;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;
}
