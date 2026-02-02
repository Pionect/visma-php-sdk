<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Landed costs tab &gt; Location* &gt; The location of the selected landed cost
 * supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInLandedCostDtoFactory testFactory()
 */
class LocationInLandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
