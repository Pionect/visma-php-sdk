<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfSupplierGlAccountsUpdateDto extends Model
{
    #[Property]
    public ?\SupplierGlAccountsUpdateDto $value;
}
