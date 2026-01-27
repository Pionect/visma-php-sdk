<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ReleasePaymentActionDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfPaymentTypes $type;
}
