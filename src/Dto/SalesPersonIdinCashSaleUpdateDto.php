<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The field is deprecated for customer document endpoints, please use Salesperson instead
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonIdinCashSaleUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonIdinCashSaleUpdateDtoFactory factory()
 */
class SalesPersonIdinCashSaleUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
