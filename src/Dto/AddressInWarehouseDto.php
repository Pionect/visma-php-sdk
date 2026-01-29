<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Address information tab &gt; Address section &gt;
 */
class AddressInWarehouseDto extends Model
{
    /** Information retrieved from the system. */
    #[Property]
    public ?int $addressId;

    /** Information retrieved from the system. */
    #[Property]
    public ?string $addressType;

    /** Information retrieved from the system. */
    #[Property]
    public ?bool $validated;

    /** Address ! &gt; The first line in the address of the warehouse. */
    #[Property]
    public ?string $addressLine1;

    /** Address 2 &gt; The second line in the warehouse address. */
    #[Property]
    public ?string $addressLine2;

    /** City &gt; The city of the warehouse address. */
    #[Property]
    public ?string $city;

    #[Property]
    public ?countryInWarehouseAddressDto $country;

    #[Property]
    public ?countyInWarehouseAddressDto $county;

    /** Postcode &gt; The postcode relevant for the warehouse address. */
    #[Property]
    public ?string $postalCode;
}
