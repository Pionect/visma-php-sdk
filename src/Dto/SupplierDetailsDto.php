<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierDetailsDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfBoolean $active;

    #[Property]
    public ?\DtoValueOfBoolean $default;

    #[Property]
    public ?\DtoValueOfString $supplierId;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $purchaseUnit;

    #[Property]
    public ?\DtoValueOfString $supplierItemId;

    #[Property]
    public ?\DtoValueOfBoolean $override;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $shipmentLeadTime;

    #[Property]
    public ?\DtoValueOfInt32 $minOrderFreq;

    #[Property]
    public ?\DtoValueOfDecimal $minOrderQty;

    #[Property]
    public ?\DtoValueOfDecimal $maxOrderQty;

    #[Property]
    public ?\DtoValueOfDecimal $lotSize;

    #[Property]
    public ?\DtoValueOfDecimal $eoq;

    #[Property]
    public ?\DtoValueOfString $currencyId;
}
