<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierDetailsDtoFactory testFactory()
 */
class SupplierDetailsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierDetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $default = null,
        #[MapName('supplierID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $location = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseUnit = null,
        #[MapName('supplierItemID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierItemId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $override = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $shipmentLeadTime = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $minOrderFreq = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $minOrderQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $maxOrderQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $lotSize = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $eoq = null,
        #[MapName('currencyID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
    ) {}
}
