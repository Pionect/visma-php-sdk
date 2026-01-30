<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IntrastatDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatDtoFactory factory()
 */
class IntrastatDto extends Model
{
    public function __construct(
        public ?string $cN8 = null,
        public ?string $countryOfOrigin = null,
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
