<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AttributeIdValueDtoFactory testFactory()
 */
class AttributeIdValueDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        /** Value > The value of the attribute. */
        public ?string $value = null,
        /** Attribute > The description of the attribute. */
        public ?string $description = null,
    ) {}
}
