<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class AddPoreceiptLineDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $poReceiptNumber;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $poReceiptLineNumber;

    #[Property]
    public ?\DtoValueOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitCostInCurrency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $costInCurrency;
}
