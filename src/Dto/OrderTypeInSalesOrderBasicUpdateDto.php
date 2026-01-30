<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OrderTypeInSalesOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OrderTypeInSalesOrderBasicUpdateDtoFactory factory()
 */
class OrderTypeInSalesOrderBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
