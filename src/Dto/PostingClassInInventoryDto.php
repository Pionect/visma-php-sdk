<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Posting class* &gt; The
 * posting class of the stock item, which by default is the posting class assigned to the item class.
 */
class PostingClassInInventoryDto extends Model
{
    /** The description. */
    #[Property]
    public ?string $description;
}
