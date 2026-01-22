<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfCustomerDefaultPaymentMethodUpdateDto extends Model
{
    #[Property]
    public ?\CustomerDefaultPaymentMethodUpdateDto $value;
}
