<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Location &gt; The location for which you want to view data; select a location, or
 * make no selection to view data for all locations.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInInventorySummaryDtoFactory testFactory()
 */
class LocationInInventorySummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
