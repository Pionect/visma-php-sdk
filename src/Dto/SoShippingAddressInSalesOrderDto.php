<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Delivery address section
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SoShippingAddressInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SoShippingAddressInSalesOrderDtoFactory factory()
 */
class SoShippingAddressInSalesOrderDto extends Model
{
    public function __construct(
        public ?bool $overrideAddress = null,
        public ?int $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $postalCode = null,
        public ?string $city = null,
        public ?CountryInSalesOrderAddressDto $country = null,
        public ?CountyInSalesOrderAddressDto $county = null,
    ) {}
}
