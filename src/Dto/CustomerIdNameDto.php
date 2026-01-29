<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerIdNameDto extends Model
{
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
