<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Location &gt; The location for which you want to view data; select a location, or
 * make no selection to view data for all locations.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInInventorySummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInInventorySummaryDtoFactory testFactory()
 */
class LocationInInventorySummaryDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
