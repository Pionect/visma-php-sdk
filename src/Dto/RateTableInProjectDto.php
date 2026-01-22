<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoicing and allocation settings section &gt; Rate table &gt; The rate table to be
 * used with the allocation rules, if applicable.
 */
class RateTableInProjectDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
