<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Supplier info tab &gt; The Supplier address section &gt; The default contact setting for the
 * supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\RemitAddressInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\RemitAddressInPurchaseOrderDtoFactory factory()
 */
class RemitAddressInPurchaseOrderDto extends Model
{
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
