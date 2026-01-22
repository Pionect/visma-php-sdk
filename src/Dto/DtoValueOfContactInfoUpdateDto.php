<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfContactInfoUpdateDto extends Model
{
    #[Property]
    public ?\ContactInfoUpdateDto $value;
}
