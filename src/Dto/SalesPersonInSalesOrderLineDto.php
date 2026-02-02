<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Salesperson ID &gt; The salesperson associated with the sale of the line item.
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInSalesOrderLineDtoFactory testFactory()
 */
class SalesPersonInSalesOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
