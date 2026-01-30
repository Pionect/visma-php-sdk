<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StartDateInProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StartDateInProjectUpdateDtoFactory testFactory()
 */
class StartDateInProjectUpdateDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $value = null,
    ) {}
}
