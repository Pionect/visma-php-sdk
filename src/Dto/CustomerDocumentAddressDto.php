<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDocumentAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDocumentAddressDtoFactory testFactory()
 */
class CustomerDocumentAddressDto extends Model
{
    public function __construct(
        public ?int $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $postalCode = null,
        public ?string $city = null,
        public ?CountryInCustomerDocumentAddressDto $country = null,
        public ?CountyInCustomerDocumentAddressDto $county = null,
        public ?bool $overrideAddress = null,
    ) {}
}
