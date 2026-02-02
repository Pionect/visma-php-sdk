<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Default location settings section &gt; Location name &gt; A description
 * of the customer location.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerDtoFactory testFactory()
 */
class LocationInCustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
