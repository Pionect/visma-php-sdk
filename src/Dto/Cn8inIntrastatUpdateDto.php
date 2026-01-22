<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Represents the 8 digit level Combine Nomenclature commodity code specific for the year
 * for which
 * the creating / actualizations Intrastat declarations is drafted.
 */
class Cn8inIntrastatUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
