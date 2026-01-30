<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Represents the 8 digit level Combine Nomenclature commodity code specific for the year
 * for which
 * the creating / actualizations Intrastat declarations is drafted.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\Cn8inIntrastatUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\Cn8inIntrastatUpdateDtoFactory factory()
 */
class Cn8inIntrastatUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
