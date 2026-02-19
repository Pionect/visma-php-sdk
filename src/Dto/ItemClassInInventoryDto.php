<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
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
        public ?ItemClassTypeEnum $type = null,
        /** @var ClassAttributeDto[]|null */
        public ?array $attributes = null,
        /** The identifier. */
        public ?string $id = null,
        /** The description. */
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
