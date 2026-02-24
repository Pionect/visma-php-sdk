<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Supplier info tab &gt; The Supplier address section &gt; The default shipping address for the
 * supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingAddressInPurchaseOrderDtoFactory testFactory()
 */
class ShippingAddressInPurchaseOrderDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ShippingAddressInPurchaseOrderDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * The Supplier info tab > The Supplier address section > Override > A check box
         * that you select to override (that is, to edit ) the default shipping address
         * for the supplier.
         */
        public ?bool $overrideAddress = null,
        public ?int $addressId = null,
        /**
         * Address 1 > The first line of the customer's/supplier's/company's/employee's
         * contact address.
         */
        public ?string $addressLine1 = null,
        /** Address 2 > The second line of the address. */
        public ?string $addressLine2 = null,
        /** Address 3 > The third line of the address. */
        public ?string $addressLine3 = null,
        /** Postcode > The postcode. */
        public ?string $postalCode = null,
        /** City > The city. */
        public ?string $city = null,
        public ?CountryInPurchaseOrderAddressDto $country = null,
        public ?CountyInPurchaseOrderAddressDto $county = null,
    ) {}
}
