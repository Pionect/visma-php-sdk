<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Location &gt; The customer location associated with the contract.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInCustomerContractDtoFactory testFactory()
 */
class LocationInCustomerContractDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
