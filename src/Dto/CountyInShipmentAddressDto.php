<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * County &gt; The county or province.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountyInShipmentAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountyInShipmentAddressDtoFactory factory()
 */
class CountyInShipmentAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
