<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Employee &gt; The name of the employee whose time card is currently open.
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeInTimeCardDtoFactory testFactory()
 */
class EmployeeInTimeCardDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
