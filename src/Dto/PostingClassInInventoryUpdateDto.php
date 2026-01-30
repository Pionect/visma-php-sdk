<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The posting class of the item, which by default is the posting class assigned to the item class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PostingClassInInventoryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PostingClassInInventoryUpdateDtoFactory factory()
 */
class PostingClassInInventoryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
