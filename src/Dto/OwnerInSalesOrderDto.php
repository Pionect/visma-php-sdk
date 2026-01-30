<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial settings tab &gt; Financial information section &gt; Owner &gt; The user in the work
 * group who is responsible for the sales order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OwnerInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInSalesOrderDtoFactory testFactory()
 */
class OwnerInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $employeeId = null,
        public ?string $name = null,
    ) {}
}
