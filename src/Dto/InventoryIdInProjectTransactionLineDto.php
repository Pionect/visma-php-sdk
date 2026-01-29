<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
