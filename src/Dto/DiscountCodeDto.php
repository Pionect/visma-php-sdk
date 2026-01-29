<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeDtoFactory factory()
 */
class DiscountCodeDto extends Model
{
    #[Property]
    public ?string $discountCode;

    #[Property]
    public ?string $description;

    /** DiscountType: L - Line, G - Group, D - Document */
    #[Property]
    public ?string $discountType;

    /**
     * Mandatory field: Discount codes table &gt; Applicable to &gt; The entity to which the discount may be applied.
     * Applicable To values:
     * CU - Customer,
     * CI - Customer and Item,
     * CP - Customer and Item Price Class,
     * CE - Customer Price Class,
     * PI - Customer Price Class and Item,
     * PP - Customer Price Class and Item Price Class,
     * CB - Customer and Branch,
     * PB - Customer Price Class and Branch,
     * WH - Warehouse,
     * WI - Warehouse and Item,
     * WC - Warehouse and Customer,
     * WP - Warehouse and Item Price Class,
     * WE - Warehouse and Customer Price Class,
     * BR - Branch,
     * IN - Item,
     * IE - Item Price Class,
     * UN - Unconditional
     */
    #[Property]
    public ?string $applicableTo;

    /** Discount codes table &gt; Apply to deferred revenue &gt; A check box that (if selected) indicates that a discount should be applied to a component price while computing a deferred revenue for the component. */
    #[Property]
    public ?bool $applyToDeferredRevenue;

    /** Discount codes table &gt; Manual &gt; A check box that (if selected) indicates that this discount is excluded from automatic searches for the best available discount. */
    #[Property]
    public ?bool $manual;

    /** Discount codes table &gt; Exclude from discountable amount &gt; A check box that (if selected) indicates that the line amount is excluded from the amount that is the base for any applicable Group or Document discount. */
    #[Property]
    public ?bool $excludeFromDiscountableAmount;

    /** Discount codes table &gt; Skip document discounts &gt; A check box that indicates (if selected) that after this discount has been applied, no other applicable discounts should be applied. */
    #[Property]
    public ?bool $skipDocumentDiscounts;

    /** Discount codes table &gt; Auto numbering &gt; A check box that you select to use auto-numbering for generating IDs for series based on this discount code. */
    #[Property]
    public ?bool $autoNumbering;

    /** Discount codes table &gt; Last number &gt; The last ID used for the series if series IDs are auto-numbered. */
    #[Property]
    public ?string $lastNumber;

    /** System generated value. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    /** System generated value. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
