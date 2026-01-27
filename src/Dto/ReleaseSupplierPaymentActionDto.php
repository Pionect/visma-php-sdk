<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ReleaseSupplierPaymentActionDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfSupplierPaymentTypes $type;
}
