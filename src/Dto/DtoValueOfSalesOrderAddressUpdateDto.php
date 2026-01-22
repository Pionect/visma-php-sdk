<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfSalesOrderAddressUpdateDto extends Model
{
    #[Property]
    public ?\SalesOrderAddressUpdateDto $value;
}
