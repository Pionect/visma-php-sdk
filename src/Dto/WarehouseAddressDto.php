<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseAddressDtoFactory testFactory()
 */
class WarehouseAddressDto extends Model
{
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
