<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery Address
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DeliveryAddressInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DeliveryAddressInExtendedOrganizationDtoFactory factory()
 */
class DeliveryAddressInExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?int $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $postalCode = null,
        public ?string $city = null,
        public ?CountryInAddressDto $country = null,
        public ?CountyInAddressDto $county = null,
    ) {}
}
