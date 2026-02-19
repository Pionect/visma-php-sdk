<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeControlTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ClassAttributeDtoFactory testFactory()
 */
class ClassAttributeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The Attributes tab > Attribute ID > The identifier of the attribute. */
        public ?string $attributeId = null,
        /**
         * The Attributes tab > Description > A read-only column that displays the
         * detailed description of the attribute.
         */
        public ?string $description = null,
        /**
         * The Attributes tab > Sort order > A number that represents the order of the
         * attribute in the list of class attributes.The lower the number, the higher
         * the attribute will be in the list of class attributes.
         */
        public ?int $sortOrder = null,
        /**
         * The Attributes tab > Required > This check box indicates (if selected) that
         * the attribute value is required for items of the class.
         */
        public ?bool $required = null,
        public ?AttributeControlTypeEnum $attributeType = null,
        /** The Attributes tab > Default value > The default value of the attribute. */
        public ?string $defaultValue = null,
        /** @var ClassAttributeDetailDto[]|null */
        public ?array $details = null,
    ) {}
}
