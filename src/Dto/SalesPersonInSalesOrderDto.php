<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Commissions tab &gt; Salesperson ID &gt; The salesperson.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInSalesOrderDtoFactory testFactory()
 */
class SalesPersonInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
