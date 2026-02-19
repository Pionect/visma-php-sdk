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
        /**
         * The top part > Active > A check box that indicates (if selected) that the
         * series is active.
         */
        public ?bool $active = null,
        /**
         * Discount breakpoints tab > Break amount > The line amount (break point) that
         * starts the new range for the currently effective series.
         */
        public int|float|null $breakAmount = null,
        public int|float|null $amountTo = null,
        /**
         * Discount breakpoints tab > Last break amount > The amount (break point) that
         * started the new range for the previously effective series (the one that was
         * used before the effective date).
         */
        public int|float|null $lastBreakAmount = null,
        public int|float|null $lastAmountTo = null,
        /**
         * Discount breakpoints tab > Pending break amount > The amount (break point)
         * that starts the new range for the pending series (one that is not yet in
         * effect).
         */
        public int|float|null $pendingBreakAmount = null,
        /**
         * Discount breakpoints tab > Break quantity > The quantity of items (break
         * quantity) that starts the new range for a discount level for the currently
         * effective series. Any break quantity should be specified in the base units.
         */
        public int|float|null $breakQuantity = null,
        public int|float|null $quantityTo = null,
        /**
         * Discount breakpoints tab > Last break quantity > The quantity of item (break
         * point) that started the range for the discount series used before the
         * effective date.
         */
        public int|float|null $lastBreakQuantity = null,
        public int|float|null $lastQuantityTo = null,
        /**
         * Discount breakpoints tab > Pending break quantity > The quantity of items
         * (break point) that starts the new range for the pending (not yet effective)
         * series.
         */
        public int|float|null $pendingBreakQuantity = null,
        /**
         * Discount breakpoints tab > Discount amount > The discount amount to be used
         * for the quantities that exceed this break quantity if the Amount option is
         * selected as Discount by.
         */
        public int|float|null $discountAmount = null,
        /**
         * Discount breakpoints tab > Discount percent > The discount percent to be
         * currently used for the quantities that exceed this break quantity if the
         * Percent option is selected as Discount by.
         */
        public int|float|null $discountPercent = null,
        /**
         * Discount breakpoints tab > Last discount amount > The amount used as the
         * discount for the discount series that was in effect before the effective
         * date.
         */
        public int|float|null $lastDiscountAmount = null,
        /**
         * Discount breakpoints tab > Last discount percent > The percentage used for
         * the break point in the previously effective series.
         */
        public int|float|null $lastDiscountPercent = null,
        /**
         * Discount breakpoints tab > Last discount amount > The amount used as the
         * discount for the discount series that was in effect before the effective
         * date.
         */
        public int|float|null $lastDiscount = null,
        /**
         * Discount breakpoints tab > Pending discount amount > The amount to be used as
         * the discount for the pending series if the Amount option is selected as
         * Discount by.
         */
        public int|float|null $pendingDiscountAmount = null,
        /**
         * Discount breakpoints tab > Pending discount percent > The discount percent to
         * be used for the break point in the pending series.
         */
        public int|float|null $pendingDiscountPercent = null,
        /**
         * Discount breakpoints tab > Free item qty. > The quantity of the free item to
         * be added as the discount to orders for this discount series.
         */
        public int|float|null $freeItemQty = null,
        /**
         * Discount breakpoints tab > Last free item qty. > The quantity of the free
         * item that was used as the discount for the previously effective series.
         */
        public int|float|null $lastFreeItemQty = null,
        /**
         * Discount breakpoints tab > Pending free item qty. > The quantity of the free
         * item to be added as the discount to orders for the pending discount series.
         */
        public int|float|null $pendingFreeItemQty = null,
        public ?\Carbon\Carbon $pendingDate = null,
        public ?\Carbon\Carbon $effectiveDate = null,
    ) {}
}
