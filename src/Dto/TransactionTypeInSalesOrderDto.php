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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TransactionTypeInSalesOrderDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?int $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
