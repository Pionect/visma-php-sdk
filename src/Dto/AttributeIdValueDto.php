<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeIdValueDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeIdValueDtoFactory factory()
 */
class AttributeIdValueDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $value = null,
        public ?string $description = null,
    ) {}
}
