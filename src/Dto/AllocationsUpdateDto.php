<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Allocations for Purchase Receipt Line in PurchaseReceiptEndpoint. Used to
 * add/update data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AllocationsUpdateDtoFactory factory()
 */
class AllocationsUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        public ?LineNbrInAllocationsUpdateDto $lineNbr = null,
        public ?LocationInAllocationsUpdateDto $location = null,
        public ?LotSerialNumberInAllocationsUpdateDto $lotSerialNumber = null,
        public ?QuantityInAllocationsUpdateDto $quantity = null,
        public ?UomInAllocationsUpdateDto $uom = null,
        public ?ExpirationDateInAllocationsUpdateDto $expirationDate = null,
    ) {}
}
