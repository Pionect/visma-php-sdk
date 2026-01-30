<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IntrastatUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatUpdateDtoFactory factory()
 */
class IntrastatUpdateDto extends Model
{
    public function __construct(
        public ?CN8inIntrastatUpdateDto $cN8 = null,
        public ?CountryOfOriginInIntrastatUpdateDto $countryOfOrigin = null,
        public ?SupplementaryMeasureUnitInIntrastatUpdateDto $supplementaryMeasureUnit = null,
    ) {}
}
