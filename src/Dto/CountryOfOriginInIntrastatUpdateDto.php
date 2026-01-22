<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The country of origin of the commodity will be selected,
 * that country where the good has been
 * produced or had the last substantial transformation.
 */
class CountryOfOriginInIntrastatUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
