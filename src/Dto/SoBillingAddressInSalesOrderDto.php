<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Financial settings tab &gt; Invoice address section
 *
 * @method static \Pionect\VismaSdk\Factories\SoBillingAddressInSalesOrderDtoFactory testFactory()
 */
class SoBillingAddressInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
