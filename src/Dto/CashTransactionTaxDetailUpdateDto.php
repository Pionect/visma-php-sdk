<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CashTransactionTaxDetailUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $vatId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $taxableAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $vatAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $expenseAmount;
}
