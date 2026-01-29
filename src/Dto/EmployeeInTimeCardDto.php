<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Employee &gt; The name of the employee whose time card is currently open.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EmployeeInTimeCardDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EmployeeInTimeCardDtoFactory factory()
 */
class EmployeeInTimeCardDto extends Model
{
    #[Property]
    public ?string $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
