<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Deliver settings tab &gt; Default location settings section &gt; Price class &gt; The price class
 * assigned to the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\PriceClassInCustomerDtoFactory testFactory()
 */
class PriceClassInCustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
