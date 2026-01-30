<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Transaction type
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransactionTypeInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransactionTypeInSalesOrderDtoFactory testFactory()
 */
class TransactionTypeInSalesOrderDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
