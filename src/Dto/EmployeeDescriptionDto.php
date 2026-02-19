<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\EmployeeDescriptionDtoFactory testFactory()
 */
class EmployeeDescriptionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Employee internal user ID. This is the ID of the user linked to the employee */
        public ?string $id = null,
        /**
         * The Financial settings tab > The Financial information section > Owner >
         * Click the magnifier  > Employee ID > The unique identifier, which is assigned
         * to the employee in accordance with the configuration of the EMPLOYEEsegmented
         * key. This information is retrieved from window EP203000.
         */
        public ?string $employeeId = null,
        /**
         * The Financial settings tab > The Financial information section > Owner >
         * Click the magnifier > Employee name > The name of this employee. This
         * information is retrieved from window EP203000.
         */
        public ?string $name = null,
    ) {}
}
