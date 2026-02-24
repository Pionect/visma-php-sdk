<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerSalesPriceUpdatePriceTypeEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceUpdateDtoFactory testFactory()
 */
class CustomerSalesPriceUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerSalesPriceUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?CustomerSalesPriceUpdatePriceTypeEnum $priceType = null,
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
