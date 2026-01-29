<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ChangeEmployeeNrActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ChangeEmployeeNrActionDtoFactory factory()
 */
class ChangeEmployeeNrActionDto extends Model
{
    #[Property]
    public ?string $employeeNr;
}
