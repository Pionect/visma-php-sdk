<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Commissions tab &gt; Salesperson ID &gt; The salesperson.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInSalesOrderDtoFactory factory()
 */
class SalesPersonInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
