<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInProjectUpdateDtoFactory testFactory()
 */
class DescriptionInProjectUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
