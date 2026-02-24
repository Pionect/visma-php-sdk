<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DiscountCodeDtoFactory testFactory()
 */
class DiscountCodeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DiscountCodeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $discountCode = null,
        public ?string $description = null,
        /** DiscountType: L - Line, G - Group, D - Document */
        public ?string $discountType = null,
        /**
         * Mandatory field: Discount codes table > Applicable to > The entity to which
         * the discount may be applied.
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
        public ?string $applicableTo = null,
        /**
         * Discount codes table > Apply to deferred revenue > A check box that (if
         * selected) indicates that a discount should be applied to a component price
         * while computing a deferred revenue for the component.
         */
        public ?bool $applyToDeferredRevenue = null,
        /**
         * Discount codes table > Manual > A check box that (if selected) indicates that
         * this discount is excluded from automatic searches for the best available
         * discount.
         */
        public ?bool $manual = null,
        /**
         * Discount codes table > Exclude from discountable amount > A check box that
         * (if selected) indicates that the line amount is excluded from the amount that
         * is the base for any applicable Group or Document discount.
         */
        public ?bool $excludeFromDiscountableAmount = null,
        /**
         * Discount codes table > Skip document discounts > A check box that indicates
         * (if selected) that after this discount has been applied, no other applicable
         * discounts should be applied.
         */
        public ?bool $skipDocumentDiscounts = null,
        /**
         * Discount codes table > Auto numbering > A check box that you select to use
         * auto-numbering for generating IDs for series based on this discount code.
         */
        public ?bool $autoNumbering = null,
        /**
         * Discount codes table > Last number > The last ID used for the series if
         * series IDs are auto-numbered.
         */
        public ?string $lastNumber = null,
        /** System generated value. */
        public ?\Carbon\Carbon $createdDateTime = null,
        /** System generated value. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
