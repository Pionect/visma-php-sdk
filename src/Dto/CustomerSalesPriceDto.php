<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerSalesPrice in CustomerSalesPriceController.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerSalesPriceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceDtoFactory factory()
 */
class CustomerSalesPriceDto extends Model
{
    /** Mandatory field: The Sales price table &gt; Item ID* &gt; The ID of the stock or non-stock stock item for which price information is listed. */
    #[Property]
    public ?int $recordId;

    /** The Sales price table or the top part &gt; Price type &gt; The type of prices you want to view: All prices, Base, Customer, Customer price class. */
    #[Property]
    public ?string $priceType;

    /** The Sales price table or the top part &gt; Price code &gt; The customer or a customer price class for which you want to create or edit a price list. */
    #[Property]
    public ?string $priceCode;

    /** The Sales price table or the top part &gt; Warehouse &gt; The warehouse in which the price applies. */
    #[Property]
    public ?string $inventoryId;

    /** The Sales price table &gt; Description &gt; The description of the stock item. */
    #[Property]
    public ?string $description;

    /** Mandatory field: The Sales price table &gt; UoM* &gt; The unit of measure (UoM) used for the item. */
    #[Property]
    public ?string $uoM;

    /** The Sales price table &gt; Promotion &gt; A check box that indicates (if selected) that the price for this item is promotional. */
    #[Property]
    public ?bool $promotion;

    /** The Sales price table &gt; Break quantity &gt; The quantity to define a lower bound for a quantity tier with the specific price. */
    #[Property]
    public ?float $breakQty;

    /** The Sales Price table &gt; Price &gt; The price for the item. */
    #[Property]
    public ?float $price;

    /** Mandatory field: The Sales price table &gt; Currency* &gt; The currency in which this price is specified. */
    #[Property]
    public ?string $currency;

    /** The Sales price table &gt; VAT &gt; The VAT amount that is included in the sales price. */
    #[Property]
    public ?string $vat;

    /** The Sales price table &gt; Effective date &gt; The date when the price became effective. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    /** The Sales price table &gt; Ecpiration date &gt; The date when the price expires. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $warehouse;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
