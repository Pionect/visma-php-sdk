<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ReopenSalesOrderActionDtoFactory testFactory()
 */
class ReopenSalesOrderActionDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ReopenSalesOrderActionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?SaleOrderUpdateDtoInReopenSalesOrderActionDto $saleOrderUpdateDto = null,
    ) {}
}
