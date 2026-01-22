<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SalesOrderShipmentDto extends Model
{
    #[Property]
    public ?string $shipmentType;

    #[Property]
    public ?string $shipmentNo;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $shipmentDate;

    #[Property]
    public ?float $shippedQty;

    #[Property]
    public ?float $shippedWeight;

    #[Property]
    public ?float $shippedVolume;

    #[Property]
    public ?string $invoiceType;

    #[Property]
    public ?string $invoiceNo;

    #[Property]
    public ?string $inventoryDocType;

    #[Property]
    public ?string $inventoryRefNo;
}
