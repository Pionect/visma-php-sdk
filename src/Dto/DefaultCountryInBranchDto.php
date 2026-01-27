<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The organisation details tab &gt; Configuration settings section &gt; Default
 * country* &gt; The default country, which is the country of most of the company's customers and
 * suppliers.
 */
class DefaultCountryInBranchDto extends Model
{
    /** Mandatory field: Country name* &gt; The complete name of the country. */
    #[Property]
    public ?string $name;

    #[Property]
    public ?string $errorInfo;
}
