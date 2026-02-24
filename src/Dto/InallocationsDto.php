<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents Allocation/Kit Allocation. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\InallocationsDtoFactory testFactory()
 */
class InallocationsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InallocationsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?LocationDescriptionDto $location = null,
        public ?string $lotSerialNumber = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?\Carbon\Carbon $expirationDate = null,
    ) {}
}
