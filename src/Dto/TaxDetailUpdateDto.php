<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Tax Detail Line. Used to pass data to server for updating a tax line
 */
class TaxDetailUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $taxId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $taxableAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $vatAmount;
}
