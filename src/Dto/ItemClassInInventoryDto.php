<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Item class* &gt; The item
 * class to which the stock item is assigned.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemClassInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemClassInInventoryDtoFactory factory()
 */
class ItemClassInInventoryDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?array $attributes = null,
        public ?string $id = null,
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
