<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountBreakpointDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountBreakpointDtoFactory factory()
 */
class DiscountBreakpointDto extends Model
{
    #[Property]
    public ?int $lineNbr;

    /** The top part &gt; Active &gt; A check box that indicates (if selected) that the series is active. */
    #[Property]
    public ?bool $active;

    /** Discount breakpoints tab &gt; Break amount &gt; The line amount (break point) that starts the new range for the currently effective series. */
    #[Property]
    public ?float $breakAmount;

    #[Property]
    public ?float $amountTo;

    /** Discount breakpoints tab &gt; Last break amount &gt; The amount (break point) that started the new range for the previously effective series (the one that was used before the effective date). */
    #[Property]
    public ?float $lastBreakAmount;

    #[Property]
    public ?float $lastAmountTo;

    /** Discount breakpoints tab &gt; Pending break amount &gt; The amount (break point) that starts the new range for the pending series (one that is not yet in effect). */
    #[Property]
    public ?float $pendingBreakAmount;

    /** Discount breakpoints tab &gt; Break quantity &gt; The quantity of items (break quantity) that starts the new range for a discount level for the currently effective series. Any break quantity should be specified in the base units. */
    #[Property]
    public ?float $breakQuantity;

    #[Property]
    public ?float $quantityTo;

    /** Discount breakpoints tab &gt; Last break quantity &gt; The quantity of item (break point) that started the range for the discount series used before the effective date. */
    #[Property]
    public ?float $lastBreakQuantity;

    #[Property]
    public ?float $lastQuantityTo;

    /** Discount breakpoints tab &gt; Pending break quantity &gt; The quantity of items (break point) that starts the new range for the pending (not yet effective) series. */
    #[Property]
    public ?float $pendingBreakQuantity;

    /** Discount breakpoints tab &gt; Discount amount &gt; The discount amount to be used for the quantities that exceed this break quantity if the Amount option is selected as Discount by. */
    #[Property]
    public ?float $discountAmount;

    /** Discount breakpoints tab &gt; Discount percent &gt; The discount percent to be currently used for the quantities that exceed this break quantity if the Percent option is selected as Discount by. */
    #[Property]
    public ?float $discountPercent;

    /** Discount breakpoints tab &gt; Last discount amount &gt; The amount used as the discount for the discount series that was in effect before the effective date. */
    #[Property]
    public ?float $lastDiscountAmount;

    /** Discount breakpoints tab &gt; Last discount percent &gt; The percentage used for the break point in the previously effective series. */
    #[Property]
    public ?float $lastDiscountPercent;

    /** Discount breakpoints tab &gt; Last discount amount &gt; The amount used as the discount for the discount series that was in effect before the effective date. */
    #[Property]
    public ?float $lastDiscount;

    /** Discount breakpoints tab &gt; Pending discount amount &gt; The amount to be used as the discount for the pending series if the Amount option is selected as Discount by. */
    #[Property]
    public ?float $pendingDiscountAmount;

    /** Discount breakpoints tab &gt; Pending discount percent &gt; The discount percent to be used for the break point in the pending series. */
    #[Property]
    public ?float $pendingDiscountPercent;

    /** Discount breakpoints tab &gt; Free item qty. &gt; The quantity of the free item to be added as the discount to orders for this discount series. */
    #[Property]
    public ?float $freeItemQty;

    /** Discount breakpoints tab &gt; Last free item qty. &gt; The quantity of the free item that was used as the discount for the previously effective series. */
    #[Property]
    public ?float $lastFreeItemQty;

    /** Discount breakpoints tab &gt; Pending free item qty. &gt; The quantity of the free item to be added as the discount to orders for the pending discount series. */
    #[Property]
    public ?float $pendingFreeItemQty;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $pendingDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;
}
