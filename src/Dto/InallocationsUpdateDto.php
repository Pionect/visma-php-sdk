<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Kit Allocations from Kit Assembly. Used to add/update data.
 */
class InallocationsUpdateDto extends Model
{
    /** The operation &gt;  Insert=1, Update=2, Delete=3 */
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $lotSerialNumber;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;
}
