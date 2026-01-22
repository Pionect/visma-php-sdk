<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class DtoValueOfSalesOrderContactUpdateDto extends Model
{
    #[Property]
    public ?\SalesOrderContactUpdateDto $value;
}
