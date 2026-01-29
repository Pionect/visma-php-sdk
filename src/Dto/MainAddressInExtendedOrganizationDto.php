<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Main Address
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MainAddressInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MainAddressInExtendedOrganizationDtoFactory factory()
 */
class MainAddressInExtendedOrganizationDto extends Model
{
    #[Property]
    public ?int $addressId;

    /** Address 1 &gt; The first line of the customer's/supplier's/company's/employee's contact address. */
    #[Property]
    public ?string $addressLine1;

    /** Address 2 &gt; The second line of the address. */
    #[Property]
    public ?string $addressLine2;

    /** Address 3 &gt; The third line of the address. */
    #[Property]
    public ?string $addressLine3;

    /** Postcode &gt; The postcode. */
    #[Property]
    public ?string $postalCode;

    /** City &gt; The city. */
    #[Property]
    public ?string $city;

    #[Property]
    public ?countryInAddressDto $country;

    #[Property]
    public ?countyInAddressDto $county;
}
