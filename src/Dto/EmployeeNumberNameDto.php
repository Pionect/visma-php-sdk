<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    #[Property]
    public ?string $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
