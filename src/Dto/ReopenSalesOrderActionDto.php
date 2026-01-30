<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReopenSalesOrderActionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReopenSalesOrderActionDtoFactory factory()
 */
class ReopenSalesOrderActionDto extends Model
{
    public function __construct(
        public ?SaleOrderUpdateDtoInReopenSalesOrderActionDto $saleOrderUpdateDto = null,
    ) {}
}
