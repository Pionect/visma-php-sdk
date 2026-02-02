<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an Employee with its Number and Name. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeNumberNameDtoFactory testFactory()
 */
class EmployeeNumberNameDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
