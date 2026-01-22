<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Lot/serial allocations for stock components in kit assemblies.
 * Used for adding and updating
 * allocations.
 */
class InventoryReceiptLineAllocationsUpdateDto extends Model
{
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
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;
}
