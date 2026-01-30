<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Main address section &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\MainAddressInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\MainAddressInSupplierDtoFactory factory()
 */
class MainAddressInSupplierDto extends Model
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
