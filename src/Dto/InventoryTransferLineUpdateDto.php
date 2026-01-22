<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryTransferLineUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $toLocationId;

    #[Property]
    public ?\DtoValueOfString $lotSerialNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?array $allocations;

    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $inventoryNumber;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfString $reasonCode;

    #[Property]
    public ?\DtoValueOfString $projectId;

    #[Property]
    public ?\DtoValueOfString $projectTaskId;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $branchNumber;
}
