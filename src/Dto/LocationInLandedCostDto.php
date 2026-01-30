<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Landed costs tab &gt; Location* &gt; The location of the selected landed cost
 * supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInLandedCostDtoFactory factory()
 */
class LocationInLandedCostDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
