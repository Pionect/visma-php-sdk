<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeEmployeeNrActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeEmployeeNrActionDtoFactory testFactory()
 */
class ChangeEmployeeNrActionDto extends Model
{
    public function __construct(
        public ?string $employeeNr = null,
    ) {}
}
