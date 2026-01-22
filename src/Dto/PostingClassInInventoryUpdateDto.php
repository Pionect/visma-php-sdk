<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The posting class of the item, which by default is the posting class assigned to the item class.
 */
class PostingClassInInventoryUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
