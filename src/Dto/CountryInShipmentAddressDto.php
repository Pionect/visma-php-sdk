<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Country &gt; The country.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountryInShipmentAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInShipmentAddressDtoFactory testFactory()
 */
class CountryInShipmentAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
