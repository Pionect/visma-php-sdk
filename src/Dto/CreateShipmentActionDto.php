<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CreateShipmentActionDto extends Model
{
    /** Mandatory field */
    #[Property]
    public ?string $orderType;

    #[Property]
    public ?bool $returnShipmentDto;

    /** Mandatory field */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $shipmentDate;

    /** Mandatory field */
    #[Property]
    public ?string $shipmentWarehouse;

    /** Operation Type. Possible values: I or R, I = Issue, R = Receipt. If not set it will take the default one defined on Order Type. */
    #[Property]
    public ?string $operation;
}
