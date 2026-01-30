<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The location in the warehouse.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInAllocationsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInAllocationsDtoFactory factory()
 */
class LocationInAllocationsDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
