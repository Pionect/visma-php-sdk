<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ClassAttributeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ClassAttributeDtoFactory testFactory()
 */
class ClassAttributeDto extends Model
{
    public function __construct(
        public ?string $attributeId = null,
        public ?string $description = null,
        public ?int $sortOrder = null,
        public ?bool $required = null,
        public ?string $attributeType = null,
        public ?string $defaultValue = null,
        public ?array $details = null,
    ) {}
}
