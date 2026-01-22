<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DisposalMethodDto extends Model
{
    /** The description of the disposal method */
    #[Property]
    public ?string $description;
}
