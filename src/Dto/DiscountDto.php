<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountDtoFactory factory()
 */
class DiscountDto extends Model
{
    /** Mandatory field: The top part &gt; Discount code &gt; The code of the discount for which you want to create a new series or view an existing one. */
    #[Property]
    public ?string $discountCode;

    /** Mandatory field: The top part &gt; Series &gt; The ID of the series defined for the discount. */
    #[Property]
    public ?string $series;

    /** The top part &gt; Description &gt; A brief description of the series. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Discount by &gt; The way the discount for the series is specified. Percent, Amount, Free item. */
    #[Property]
    public ?string $discountBy;

    /** The top part &gt; Break by &gt; The way the breakpoints for this discount series are specified. Quantity, Amount. */
    #[Property]
    public ?string $breakBy;

    /** The top part &gt; Promotional &gt; A check box that indicates (if selected) that the series is a promotional discount. */
    #[Property]
    public ?bool $promotional;

    /** The top part &gt; Active &gt; A check box that indicates (if selected) that the series is active. */
    #[Property]
    public ?bool $active;

    /** The top part &gt; Prorate discount &gt; A check box that indicates (if selected) that the discount can be prorated. */
    #[Property]
    public ?bool $prorateDiscount;

    /** The top part &gt; Effective date &gt; The date when the series becomes effective; this field appears for promotional discount series only. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    /** The top part &gt; Expiration date &gt; The date when the promotional discount expires. This field appears for the series if the Promotional check box is selected. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** The top part &gt; Last update date &gt; A read-only field that shows the date when the discount series was last updated. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastUpdateDate;

    /** Free item tab &gt; Free item &gt; The free item (by its item ID) that is added to orders as the discount for this series. */
    #[Property]
    public ?int $freeItem;

    /** Free item tab &gt; Pending free item &gt; The free item (by its item ID) that will be added to orders as the discount for this series, starting on the date specified in the Pending date column on the Discount breakpoints tab. */
    #[Property]
    public ?int $pendingFreeItem;

    /** Free item tab &gt; Last free item &gt; The free item (by its item ID) that had been added to orders as the discount for this series before the date shown in the Last date column on the Discount breakpoints tab. */
    #[Property]
    public ?int $lastFreeItem;

    /** Free item tab &gt; A line counter for the table. */
    #[Property]
    public ?int $lineCntr;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    /** Free item tab &gt; Last update date &gt; A read-only field that shows the date when this discount series has been updated last. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?array $discountBreakpoints;

    /** Customers tab &gt; Customer &gt; The customer to which the series is applicable. */
    #[Property]
    public ?array $customers;

    /** Items tab &gt; Items ID &gt; The stock or non-stock item, by its item ID, to which the series can be applied. */
    #[Property]
    public ?array $items;

    /** Warehouses tab &gt; Warehouse ID &gt; The warehouse to which the series can be applied. */
    #[Property]
    public ?array $warehouses;

    /** Customer price classes tab &gt; Customer price class ID &gt; The customer price class to which the series is applicable. */
    #[Property]
    public ?array $customerPriceClasses;

    /** Item price classes tab &gt; Price class ID &gt; The item price class to which the series is applicable. */
    #[Property]
    public ?array $itemPriceClasses;

    /** Branches tab &gt; Branch &gt; The branch to which the series can be applied. */
    #[Property]
    public ?array $branches;

    #[Property]
    public ?string $errorInfo;
}
