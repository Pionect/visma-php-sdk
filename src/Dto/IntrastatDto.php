<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for getting
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatDtoFactory testFactory()
 */
class IntrastatDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $cN8 = null,
        public ?string $countryOfOrigin = null,
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
