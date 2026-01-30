<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderTypeInSalesOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderTypeInSalesOrderUpdateDtoFactory factory()
 */
class OrderTypeInSalesOrderUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
