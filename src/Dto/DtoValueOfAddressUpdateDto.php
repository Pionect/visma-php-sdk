<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfAddressUpdateDto extends Model
{
    #[Property]
    public ?\AddressUpdateDto $value;
}
