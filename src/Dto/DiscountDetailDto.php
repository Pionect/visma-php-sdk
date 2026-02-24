<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\DiscountDetailTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DiscountDetailDtoFactory testFactory()
 */
class DiscountDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DiscountDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Line number. */
        public ?int $lineNbr = null,
        /**
         * Skip discount > A check box that you select to cancel a Group or Document
         * level discount for the document.
         */
        public ?bool $skipDiscount = null,
        /**
         * Mandatory field: The table > Discount code* > The discount code of the
         * supplier discount applied to the document automatically or manually.
         */
        public ?string $discountCode = null,
        /**
         * Mandatory field: The table > Series ID* > The ID of the discount sequence
         * applied to the document.
         */
        #[MapName('sequanceID')]
        public ?string $sequanceId = null,
        /** Type > The type of discount applied to the document (Group or Document). */
        public ?DiscountDetailTypeEnum $type = null,
        /**
         * Manual discount > A check box that indicates (if selected) that the supplier
         * discount shown in this row has been applied manually .
         */
        public ?bool $manualDiscount = null,
        /**
         * Discountable amt. > The amount used as a base for discount calculation if the
         * discount is defined as based on the amount.
         */
        public int|float|null $discountableAmt = null,
        /**
         * Discountable qty. > The quantity used as a base for discount calculation if
         * the discount is defined as based on the item quantity.
         */
        public int|float|null $discountableQty = null,
        /** Discount amt. > The amount of the discount. */
        public int|float|null $discountAmt = null,
        /**
         * Discount percent > The discount percent if by definition the discount is
         * calculated as a percentage.
         */
        public int|float|null $discount = null,
        /**
         * Free item > The item ID of the free item, if one is specified by the discount
         * applied to the document.
         */
        public ?int $freeItem = null,
        /** Free item qty.> The quantity of the free item to be added as the discount. */
        public int|float|null $freeItemQty = null,
    ) {}
}
