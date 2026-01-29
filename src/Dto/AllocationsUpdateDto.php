<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** The operation &gt;  Insert=1, Update=2, Delete=3 */
    #[Property]
    public ?string $operation;

    #[Property]
    public ?lineNbrInAllocationsUpdateDto $lineNbr;

    #[Property]
    public ?locationInAllocationsUpdateDto $location;

    #[Property]
    public ?lotSerialNumberInAllocationsUpdateDto $lotSerialNumber;

    #[Property]
    public ?quantityInAllocationsUpdateDto $quantity;

    #[Property]
    public ?uomInAllocationsUpdateDto $uom;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;
}
