<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The country of origin of the commodity will be selected,
 * that country where the good has been
 * produced or had the last substantial transformation.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountryOfOriginInIntrastatUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountryOfOriginInIntrastatUpdateDtoFactory factory()
 */
class CountryOfOriginInIntrastatUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
