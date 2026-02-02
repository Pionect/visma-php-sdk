<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location &gt; The location in the warehouse.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInAllocationsDtoFactory testFactory()
 */
class LocationInAllocationsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
