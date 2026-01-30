<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeDescriptionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeDescriptionDtoFactory factory()
 */
class EmployeeDescriptionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $employeeId = null,
        public ?string $name = null,
    ) {}
}
