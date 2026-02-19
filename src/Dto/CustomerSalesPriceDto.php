<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerSalesPriceQueryParametersPriceTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a CustomerSalesPrice in CustomerSalesPriceController.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceDtoFactory testFactory()
 */
class CustomerSalesPriceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The Sales price table > Item ID* > The ID of the stock or
         * non-stock stock item for which price information is listed.
         */
        public ?int $recordId = null,
        /**
         * The Sales price table or the top part > Price type > The type of prices you
         * want to view: All prices, Base, Customer, Customer price class.
         */
        public ?CustomerSalesPriceQueryParametersPriceTypeEnum $priceType = null,
        /**
         * The Sales price table or the top part > Price code > The customer or a
         * customer price class for which you want to create or edit a price list.
         */
        public ?string $priceCode = null,
        /**
         * The Sales price table or the top part > Warehouse > The warehouse in which
         * the price applies.
         */
        public ?string $inventoryId = null,
        /** The Sales price table > Description > The description of the stock item. */
        public ?string $description = null,
        /**
         * Mandatory field: The Sales price table > UoM* > The unit of measure (UoM)
         * used for the item.
         */
        public ?string $uoM = null,
        /**
         * The Sales price table > Promotion > A check box that indicates (if selected)
         * that the price for this item is promotional.
         */
        public ?bool $promotion = null,
        /**
         * The Sales price table > Break quantity > The quantity to define a lower bound
         * for a quantity tier with the specific price.
         */
        public int|float|null $breakQty = null,
        /** The Sales Price table > Price > The price for the item. */
        public int|float|null $price = null,
        /**
         * Mandatory field: The Sales price table > Currency* > The currency in which
         * this price is specified.
         */
        public ?string $currency = null,
        /**
         * The Sales price table > VAT > The VAT amount that is included in the sales
         * price.
         */
        public ?string $vat = null,
        /**
         * The Sales price table > Effective date > The date when the price became
         * effective.
         */
        public ?\Carbon\Carbon $effectiveDate = null,
        /** The Sales price table > Ecpiration date > The date when the price expires. */
        public ?\Carbon\Carbon $expirationDate = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $warehouse = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
