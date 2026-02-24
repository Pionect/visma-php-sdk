<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DiscountBreakpointUpdateDtoFactory testFactory()
 */
class DiscountBreakpointUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DiscountBreakpointUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $pendingBreakAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $pendingDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $pendingDiscountPercent = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $pendingDiscountAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $pendingBreakQuantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $breakAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountPercent = null,
    ) {}
}
