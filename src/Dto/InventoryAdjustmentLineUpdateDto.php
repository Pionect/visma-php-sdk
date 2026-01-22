<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryAdjustmentLineUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $warehouseId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitCost;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $extCost;

    #[Property]
    public ?\DtoValueOfString $receiptNumber;

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
