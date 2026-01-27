<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CountryDto extends Model
{
    /** Mandatory field: Country name* &gt; The complete name of the country. */
    #[Property]
    public ?string $name;

    #[Property]
    public ?string $errorInfo;
}
