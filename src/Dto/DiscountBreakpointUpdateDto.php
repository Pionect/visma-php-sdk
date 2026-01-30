<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountBreakpointUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountBreakpointUpdateDtoFactory factory()
 */
class DiscountBreakpointUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
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
