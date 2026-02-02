<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AttributeDetailDtoFactory testFactory()
 */
class AttributeDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $valueId = null,
        public ?string $description = null,
        public ?int $sortOrder = null,
        public ?bool $disabled = null,
        public ?string $errorInfo = null,
    ) {}
}
