<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Item ID &gt; The identifier of the stock or non-stock item associated with the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIdInProjectTransactionLineDtoFactory testFactory()
 */
class InventoryIdInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
