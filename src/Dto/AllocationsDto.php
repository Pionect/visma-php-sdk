<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Allocations for Purchase Receipt Line in PurchaseReceiptController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsDtoFactory testFactory()
 */
class AllocationsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
