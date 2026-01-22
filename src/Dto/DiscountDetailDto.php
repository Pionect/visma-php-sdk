<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DiscountDetailDto extends Model
{
    /** The table &gt; Line number. */
    #[Property]
    public ?int $lineNbr;

    /** The table &gt; Skip discount &gt; A check box that you select to cancel a Group or Document level discount for the document. */
    #[Property]
    public ?bool $skipDiscount;

    /** Mandatory field: The table &gt; Discount code* &gt; The discount code of the supplier discount applied to the document automatically or manually. */
    #[Property]
    public ?string $discountCode;

    /** Mandatory field: The table &gt; Series ID* &gt; The ID of the discount sequence applied to the document. */
    #[Property]
    public ?string $sequanceId;

    /** The table &gt; Manual discount &gt; A check box that indicates (if selected) that the supplier discount shown in this row has been applied manually . */
    #[Property]
    public ?bool $manualDiscount;

    /** The table &gt; Discountable amt. &gt; The amount used as a base for discount calculation if the discount is defined as based on the amount. */
    #[Property]
    public ?float $discountableAmt;

    /** The table &gt; Discountable qty. &gt; The quantity used as a base for discount calculation if the discount is defined as based on the item quantity. */
    #[Property]
    public ?float $discountableQty;

    /** The table &gt; Discount amt. &gt; The amount of the discount. */
    #[Property]
    public ?float $discountAmt;

    /** The table &gt; Discount percent &gt; The discount percent if by definition the discount is calculated as a percentage. */
    #[Property]
    public ?float $discount;

    /** The table &gt; Free item &gt; The item ID of the free item, if one is specified by the discount applied to the document. */
    #[Property]
    public ?int $freeItem;

    /** The table &gt; Free item qty.&gt; The quantity of the free item to be added as the discount. */
    #[Property]
    public ?float $freeItemQty;
}
