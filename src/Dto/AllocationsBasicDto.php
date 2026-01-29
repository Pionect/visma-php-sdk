<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a basic Allocation/Kit Allocation
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AllocationsBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsBasicDtoFactory factory()
 */
class AllocationsBasicDto extends Model
{
    #[Property]
    public ?int $lineNbr;

    #[Property]
    public ?LocationDescriptionDto $location;

    #[Property]
    public ?string $lotSerialNumber;

    #[Property]
    public ?float $quantity;
}
