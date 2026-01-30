<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Country &gt; The country.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountryInAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInAddressDtoFactory factory()
 */
class CountryInAddressDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
