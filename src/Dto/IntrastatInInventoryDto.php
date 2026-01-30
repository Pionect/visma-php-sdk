<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Intrastat section
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IntrastatInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatInInventoryDtoFactory factory()
 */
class IntrastatInInventoryDto extends Model
{
    public function __construct(
        public ?string $cN8 = null,
        public ?string $countryOfOrigin = null,
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
