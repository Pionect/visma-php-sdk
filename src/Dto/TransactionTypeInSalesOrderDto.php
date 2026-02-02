<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Intrastat section &gt; Transaction type
 *
 * @method static \Pionect\VismaSdk\Factories\TransactionTypeInSalesOrderDtoFactory testFactory()
 */
class TransactionTypeInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $description = null,
    ) {}
}
