<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderAddressDtoFactory factory()
 */
class PurchaseOrderAddressDto extends Model
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
