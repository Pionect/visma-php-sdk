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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $addressId = null,
        public ?string $addressType = null,
        public ?bool $validated = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?CountryInWarehouseAddressDto $country = null,
        public ?CountyInWarehouseAddressDto $county = null,
        public ?string $postalCode = null,
    ) {}
}
