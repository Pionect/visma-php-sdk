<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * County &gt; The county or province.
 */
class CountyInSalesOrderAddressDto extends Model
{
    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
