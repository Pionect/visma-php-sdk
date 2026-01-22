<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfCustomerGlAccountsUpdateDto extends Model
{
    #[Property]
    public ?\CustomerGlAccountsUpdateDto $value;
}
