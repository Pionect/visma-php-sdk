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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesPersonInSalesOrderDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
