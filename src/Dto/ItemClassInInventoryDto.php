<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Item class* &gt; The item
 * class to which the stock item is assigned.
 *
 * @method static \Pionect\VismaSdk\Factories\ItemClassInInventoryDtoFactory testFactory()
 */
class ItemClassInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** @var ClassAttributeDto[]|null */
        public ?array $attributes = null,
        public ?string $id = null,
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
