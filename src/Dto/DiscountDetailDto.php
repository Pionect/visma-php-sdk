<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountDetailDtoFactory factory()
 */
class DiscountDetailDto extends Model
{
    public function __construct(
        public ?int $lineNbr = null,
        public ?bool $skipDiscount = null,
        public ?string $discountCode = null,
        #[MapName('sequanceID')]
        public ?string $sequanceId = null,
        public ?string $type = null,
        public ?bool $manualDiscount = null,
        public int|float|null $discountableAmt = null,
        public int|float|null $discountableQty = null,
        public int|float|null $discountAmt = null,
        public int|float|null $discount = null,
        public ?int $freeItem = null,
        public int|float|null $freeItemQty = null,
    ) {}
}
