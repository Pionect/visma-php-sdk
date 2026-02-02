<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DiscountBreakpointDtoFactory testFactory()
 */
class DiscountBreakpointDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?bool $active = null,
        public int|float|null $breakAmount = null,
        public int|float|null $amountTo = null,
        public int|float|null $lastBreakAmount = null,
        public int|float|null $lastAmountTo = null,
        public int|float|null $pendingBreakAmount = null,
        public int|float|null $breakQuantity = null,
        public int|float|null $quantityTo = null,
        public int|float|null $lastBreakQuantity = null,
        public int|float|null $lastQuantityTo = null,
        public int|float|null $pendingBreakQuantity = null,
        public int|float|null $discountAmount = null,
        public int|float|null $discountPercent = null,
        public int|float|null $lastDiscountAmount = null,
        public int|float|null $lastDiscountPercent = null,
        public int|float|null $lastDiscount = null,
        public int|float|null $pendingDiscountAmount = null,
        public int|float|null $pendingDiscountPercent = null,
        public int|float|null $freeItemQty = null,
        public int|float|null $lastFreeItemQty = null,
        public int|float|null $pendingFreeItemQty = null,
        public ?\Carbon\Carbon $pendingDate = null,
        public ?\Carbon\Carbon $effectiveDate = null,
    ) {}
}
