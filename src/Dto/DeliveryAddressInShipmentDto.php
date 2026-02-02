<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Delivery address section &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\DeliveryAddressInShipmentDtoFactory testFactory()
 */
class DeliveryAddressInShipmentDto extends SpatieData
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
        public ?CountryInShipmentAddressDto $country = null,
        public ?CountyInShipmentAddressDto $county = null,
    ) {}
}
