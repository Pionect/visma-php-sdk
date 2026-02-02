<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Supplier info tab &gt; The Supplier address section &gt; The default contact setting for the
 * supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\RemitAddressInPurchaseOrderDtoFactory testFactory()
 */
class RemitAddressInPurchaseOrderDto extends SpatieData
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
        public ?CountryInPurchaseOrderAddressDto $country = null,
        public ?CountyInPurchaseOrderAddressDto $county = null,
    ) {}
}
