<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PostingClassDto extends Model
{
    /** The identifier. */
    #[Property]
    public ?string $id;

    /** The description. */
    #[Property]
    public ?string $description;
}
