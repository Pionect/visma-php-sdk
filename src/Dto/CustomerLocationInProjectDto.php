<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Summary tab &gt; Invoice to section &gt; Customer location &gt; The location of the project's
 * customer.
 */
class CustomerLocationInProjectDto extends Model
{
    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
