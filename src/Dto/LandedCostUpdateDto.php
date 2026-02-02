<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\LandedCostUpdateDtoFactory testFactory()
 */
class LandedCostUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $landedCostCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseInvoiceNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $apBillDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategory = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $terms = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $apDocType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $apRefNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inDocType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inRefNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $postponePurchaseInvoiceCreation = null,
    ) {}
}
