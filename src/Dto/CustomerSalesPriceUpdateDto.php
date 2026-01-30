<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerSalesPriceUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceUpdateDtoFactory testFactory()
 */
class CustomerSalesPriceUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $priceType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $priceCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uoM = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $promotion = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $breakQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $price = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vat = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $effectiveDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouse = null,
    ) {}
}
