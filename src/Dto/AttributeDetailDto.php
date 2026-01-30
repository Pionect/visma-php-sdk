<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeDetailDtoFactory testFactory()
 */
class AttributeDetailDto extends Model
{
    public function __construct(
        public ?string $valueId = null,
        public ?string $description = null,
        public ?int $sortOrder = null,
        public ?bool $disabled = null,
        public ?string $errorInfo = null,
    ) {}
}
