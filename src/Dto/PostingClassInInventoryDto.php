<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Posting class* &gt; The
 * posting class of the stock item, which by default is the posting class assigned to the item class.
 *
 * @method static \Pionect\VismaSdk\Factories\PostingClassInInventoryDtoFactory testFactory()
 */
class PostingClassInInventoryDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PostingClassInInventoryDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The identifier. */
        public ?string $id = null,
        /** The description. */
        public ?string $description = null,
    ) {}
}
