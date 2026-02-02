<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Intrastat section
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatInInventoryDtoFactory testFactory()
 */
class IntrastatInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $cN8 = null,
        public ?string $countryOfOrigin = null,
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
