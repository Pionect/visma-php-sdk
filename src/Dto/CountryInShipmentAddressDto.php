<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Country &gt; The country.
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInShipmentAddressDtoFactory testFactory()
 */
class CountryInShipmentAddressDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
