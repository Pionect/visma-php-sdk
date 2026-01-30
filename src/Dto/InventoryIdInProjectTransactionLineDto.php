<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Item ID &gt; The identifier of the stock or non-stock item associated with the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryIdInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryIdInProjectTransactionLineDtoFactory factory()
 */
class InventoryIdInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
