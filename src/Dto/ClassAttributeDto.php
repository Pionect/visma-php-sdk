<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ClassAttributeDtoFactory testFactory()
 */
class ClassAttributeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $attributeId = null,
        public ?string $description = null,
        public ?int $sortOrder = null,
        public ?bool $required = null,
        public ?string $attributeType = null,
        public ?string $defaultValue = null,
        /** @var ClassAttributeDetailDto[]|null */
        public ?array $details = null,
    ) {}
}
