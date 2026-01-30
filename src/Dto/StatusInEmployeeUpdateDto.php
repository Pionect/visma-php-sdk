<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Status &gt; The status of the employee. The following options are
 * available: Active, On hold, Hold payments, Inactive, One-time.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\StatusInEmployeeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\StatusInEmployeeUpdateDtoFactory testFactory()
 */
class StatusInEmployeeUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
