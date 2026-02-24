<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a basic Allocation/Kit Allocation
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsBasicDtoFactory testFactory()
 */
class AllocationsBasicDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\AllocationsBasicDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?LocationDescriptionDto $location = null,
        public ?string $lotSerialNumber = null,
        public int|float|null $quantity = null,
    ) {}
}
