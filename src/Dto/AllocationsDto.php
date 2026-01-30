<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Allocations for Purchase Receipt Line in PurchaseReceiptController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AllocationsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsDtoFactory factory()
 */
class AllocationsDto extends Model
{
    public function __construct(
        public ?int $lineNbr = null,
        public ?string $itemId = null,
        public ?LocationInAllocationsDto $location = null,
        public ?string $lotSerialNumber = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?string $description = null,
    ) {}
}
