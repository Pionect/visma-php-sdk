<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ItemClassDtoFactory testFactory()
 */
class ItemClassDto extends SpatieData
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
