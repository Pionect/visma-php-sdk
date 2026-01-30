<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryUpdateDtoFactory testFactory()
 */
class InventoryUpdateDto extends Model
{
    public function __construct(
        public ?InventoryNumberInInventoryUpdateDto $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $body = null,
        public ?ItemClassInInventoryUpdateDto $itemClass = null,
        public ?PostingClassInInventoryUpdateDto $postingClass = null,
        public ?VatCodeInInventoryUpdateDto $vatCode = null,
        public ?DefaultPriceInInventoryUpdateDto $defaultPrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $baseUnit = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesUnit = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseUnit = null,
        public ?ExpenseAccrualAccountInInventoryUpdateDto $expenseAccrualAccount = null,
        public ?InventoryAccountInInventoryUpdateDto $inventoryAccount = null,
        public ?ExpenseAccountInInventoryUpdateDto $expenseAccount = null,
        public ?CogsAccountInInventoryUpdateDto $cogsAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseNonTaxableAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseEuAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseImportAccount = null,
        public ?array $expenseSubaccount = null,
        public ?array $cogsSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesNonTaxableAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesEuAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesExportAccount = null,
        public ?array $salesSubaccount = null,
        public ?array $attributeLines = null,
        public ?PackagingUpdateDto $packaging = null,
        public ?array $supplierDetails = null,
        public ?IntrastatUpdateDto $intrastat = null,
        public ?array $crossReferences = null,
        public ?DefaultWarehouseInInventoryUpdateDto $defaultWarehouse = null,
        public ?DefaultIssueFromInInventoryUpdateDto $defaultIssueFrom = null,
        public ?DefaultReceiptToInInventoryUpdateDto $defaultReceiptTo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $kitItem = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
