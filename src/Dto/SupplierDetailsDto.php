<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierDetailsDtoFactory testFactory()
 */
class SupplierDetailsDto extends Model
{
    public function __construct(
        public ?string $operation = null,
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
