<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryUpdateDtoFactory testFactory()
 */
class InventoryUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $type = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $body = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $itemClass = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $postingClass = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $defaultPrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $baseUnit = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesUnit = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseUnit = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccrualAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $expenseAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cogsAccount = null,
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
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defaultWarehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defaultIssueFrom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $defaultReceiptTo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $kitItem = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
    ) {}
}
