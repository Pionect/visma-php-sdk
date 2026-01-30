<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Employee &gt; The name of the employee whose time card is currently open.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeInTimeCardDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeInTimeCardDtoFactory testFactory()
 */
class EmployeeInTimeCardDto extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
