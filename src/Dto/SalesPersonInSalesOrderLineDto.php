<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Salesperson ID &gt; The salesperson associated with the sale of the line item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInSalesOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInSalesOrderLineDtoFactory factory()
 */
class SalesPersonInSalesOrderLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
