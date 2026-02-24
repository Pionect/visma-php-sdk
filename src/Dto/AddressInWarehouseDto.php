<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Address information tab &gt; Address section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\AddressInWarehouseDtoFactory testFactory()
 */
class AddressInWarehouseDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\AddressInWarehouseDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Information retrieved from the system. */
        public ?int $addressId = null,
        /** Information retrieved from the system. */
        public ?string $addressType = null,
        /** Information retrieved from the system. */
        public ?bool $validated = null,
        /** Address ! > The first line in the address of the warehouse. */
        public ?string $addressLine1 = null,
        /** Address 2 > The second line in the warehouse address. */
        public ?string $addressLine2 = null,
        /** City > The city of the warehouse address. */
        public ?string $city = null,
        public ?CountryInWarehouseAddressDto $country = null,
        public ?CountyInWarehouseAddressDto $county = null,
        /** Postcode > The postcode relevant for the warehouse address. */
        public ?string $postalCode = null,
    ) {}
}
