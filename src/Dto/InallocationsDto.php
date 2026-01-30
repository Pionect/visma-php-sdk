<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents Allocation/Kit Allocation. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InallocationsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InallocationsDtoFactory testFactory()
 */
class InallocationsDto extends Model
{
    public function __construct(
        public ?int $lineNbr = null,
        public ?LocationDescriptionDto $location = null,
        public ?string $lotSerialNumber = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?\Carbon\Carbon $expirationDate = null,
    ) {}
}
