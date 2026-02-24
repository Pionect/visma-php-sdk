<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Payment settings tab &gt; Remittance address section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\RemitAddressInSupplierDtoFactory testFactory()
 */
class RemitAddressInSupplierDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\RemitAddressInSupplierDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
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
        public ?CountryInAddressDto $country = null,
        public ?CountyInAddressDto $county = null,
    ) {}
}
