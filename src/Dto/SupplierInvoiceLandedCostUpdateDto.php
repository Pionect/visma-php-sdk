<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLandedCostUpdateDtoFactory testFactory()
 */
class SupplierInvoiceLandedCostUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $landedCostCodeId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $poReceiptNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $siteId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
    ) {}
}
