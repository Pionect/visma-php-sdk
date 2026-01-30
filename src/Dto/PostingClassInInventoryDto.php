<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Posting class* &gt; The
 * posting class of the stock item, which by default is the posting class assigned to the item class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PostingClassInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PostingClassInInventoryDtoFactory factory()
 */
class PostingClassInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
