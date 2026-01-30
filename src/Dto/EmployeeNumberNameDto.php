<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an Employee with its Number and Name. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeNumberNameDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeNumberNameDtoFactory factory()
 */
class EmployeeNumberNameDto extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
