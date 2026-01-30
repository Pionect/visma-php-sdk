<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Default location settings section &gt; Location name &gt; A description
 * of the customer location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerDtoFactory factory()
 */
class LocationInCustomerDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
