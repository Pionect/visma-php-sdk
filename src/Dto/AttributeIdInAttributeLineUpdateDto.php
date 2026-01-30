<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The ID of the attribute on the line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeIdInAttributeLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeIdInAttributeLineUpdateDtoFactory testFactory()
 */
class AttributeIdInAttributeLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
