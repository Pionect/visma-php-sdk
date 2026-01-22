<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerSalesPriceUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfPriceTypesForUpdate $priceType;

    #[Property]
    public ?\DtoValueOfString $priceCode;

    #[Property]
    public ?\DtoValueOfString $inventoryId;

    #[Property]
    public ?\DtoValueOfString $uoM;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $promotion;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $breakQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $price;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfString $vat;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $effectiveDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?\DtoValueOfString $warehouse;
}
