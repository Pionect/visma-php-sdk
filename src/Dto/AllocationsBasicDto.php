<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?int $lineNbr = null,
        public ?LocationDescriptionDto $location = null,
        public ?string $lotSerialNumber = null,
        public int|float|null $quantity = null,
    ) {}
}
