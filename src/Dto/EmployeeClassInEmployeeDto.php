<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Additional information about Employee User
 * ///
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeClassInEmployeeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeClassInEmployeeDtoFactory testFactory()
 */
class EmployeeClassInEmployeeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
