<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Additional information about Employee User
 * ///
 * @method static \Pionect\VismaSdk\Factories\EmployeeClassInEmployeeDtoFactory testFactory()
 */
class EmployeeClassInEmployeeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
