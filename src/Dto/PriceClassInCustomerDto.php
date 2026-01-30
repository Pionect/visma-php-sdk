<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Deliver settings tab &gt; Default location settings section &gt; Price class &gt; The price class
 * assigned to the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PriceClassInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PriceClassInCustomerDtoFactory testFactory()
 */
class PriceClassInCustomerDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
