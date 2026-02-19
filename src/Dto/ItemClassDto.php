<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ItemClassDtoFactory testFactory()
 */
class ItemClassDto extends SpatieData
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
