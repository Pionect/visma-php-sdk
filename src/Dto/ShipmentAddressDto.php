<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentAddressDtoFactory testFactory()
 */
class ShipmentAddressDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Override address > A check box that you select to not include the default
         * address information and to type new address information.
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
        public ?CountryInShipmentAddressDto $country = null,
        public ?CountyInShipmentAddressDto $county = null,
    ) {}
}
