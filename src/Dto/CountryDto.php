<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CountryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CountryDtoFactory factory()
 */
class CountryDto extends Model
{
    /** Mandatory field: Country ID* &gt; The unique two-letter country ID according to international standard ISO 3166. */
    #[Property]
    public ?string $id;

    /** Mandatory field: Country name* &gt; The complete name of the country. */
    #[Property]
    public ?string $name;

    #[Property]
    public ?string $errorInfo;
}
