<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The location in the warehouse.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInAllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInAllocationsUpdateDtoFactory factory()
 */
class LocationInAllocationsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
