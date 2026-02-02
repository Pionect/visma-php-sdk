<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial settings tab &gt; Financial information section &gt; Owner &gt; The user in the work
 * group who is responsible for the sales order.
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInSalesOrderDtoFactory testFactory()
 */
class OwnerInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $employeeId = null,
        public ?string $name = null,
    ) {}
}
