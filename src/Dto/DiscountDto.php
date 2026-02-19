<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DiscountDtoFactory testFactory()
 */
class DiscountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Discount code > The code of the discount for
         * which you want to create a new series or view an existing one.
         */
        public ?string $discountCode = null,
        /**
         * Mandatory field: The top part > Series > The ID of the series defined for the
         * discount.
         */
        public ?string $series = null,
        /** The top part > Description > A brief description of the series. */
        public ?string $description = null,
        /**
         * The top part > Discount by > The way the discount for the series is
         * specified. Percent, Amount, Free item.
         */
        public ?string $discountBy = null,
        /**
         * The top part > Break by > The way the breakpoints for this discount series
         * are specified. Quantity, Amount.
         */
        public ?string $breakBy = null,
        /**
         * The top part > Promotional > A check box that indicates (if selected) that
         * the series is a promotional discount.
         */
        public ?bool $promotional = null,
        /**
         * The top part > Active > A check box that indicates (if selected) that the
         * series is active.
         */
        public ?bool $active = null,
        /**
         * The top part > Prorate discount > A check box that indicates (if selected)
         * that the discount can be prorated.
         */
        public ?bool $prorateDiscount = null,
        /**
         * The top part > Effective date > The date when the series becomes effective;
         * this field appears for promotional discount series only.
         */
        public ?\Carbon\Carbon $effectiveDate = null,
        /**
         * The top part > Expiration date > The date when the promotional discount
         * expires. This field appears for the series if the Promotional check box is
         * selected.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /**
         * The top part > Last update date > A read-only field that shows the date when
         * the discount series was last updated.
         */
        public ?\Carbon\Carbon $lastUpdateDate = null,
        /**
         * Free item tab > Free item > The free item (by its item ID) that is added to
         * orders as the discount for this series.
         */
        public ?int $freeItem = null,
        /**
         * Free item tab > Pending free item > The free item (by its item ID) that will
         * be added to orders as the discount for this series, starting on the date
         * specified in the Pending date column on the Discount breakpoints tab.
         */
        public ?int $pendingFreeItem = null,
        /**
         * Free item tab > Last free item > The free item (by its item ID) that had been
         * added to orders as the discount for this series before the date shown in the
         * Last date column on the Discount breakpoints tab.
         */
        public ?int $lastFreeItem = null,
        /** Free item tab > A line counter for the table. */
        public ?int $lineCntr = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        /**
         * Free item tab > Last update date > A read-only field that shows the date when
         * this discount series has been updated last.
         */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** @var DiscountBreakpointDto[]|null */
        public ?array $discountBreakpoints = null,
        /**
         * @var DiscountCustomer2dto[]|null
         *                                  Customers tab > Customer > The customer to which the series is applicable.
         */
        public ?array $customers = null,
        /**
         * @var DiscountItemDto[]|null
         *                             Items tab > Items ID > The stock or non-stock item, by its item ID, to which
         *                             the series can be applied.
         */
        public ?array $items = null,
        /**
         * @var DiscountWarehouseDto[]|null
         *                                  Warehouses tab > Warehouse ID > The warehouse to which the series can be
         *                                  applied.
         */
        public ?array $warehouses = null,
        /**
         * @var DiscountCustomerPriceClassDto[]|null
         *                                           Customer price classes tab > Customer price class ID > The customer price
         *                                           class to which the series is applicable.
         */
        public ?array $customerPriceClasses = null,
        /**
         * @var DiscountItemPriceClassDto[]|null
         *                                       Item price classes tab > Price class ID > The item price class to which the
         *                                       series is applicable.
         */
        public ?array $itemPriceClasses = null,
        /**
         * @var DiscountBranchDto[]|null
         *                               Branches tab > Branch > The branch to which the series can be applied.
         */
        public ?array $branches = null,
        public ?string $errorInfo = null,
    ) {}
}
