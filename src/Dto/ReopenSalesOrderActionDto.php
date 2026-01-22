<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ReopenSalesOrderActionDto extends Model
{
    #[Property]
    public ?\saleOrderUpdateDtoInReopenSalesOrderActionDto $saleOrderUpdateDto;
}
