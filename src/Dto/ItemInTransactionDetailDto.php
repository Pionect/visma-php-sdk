<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Item ID &gt; The ID of the non-stock item specified as the transaction subject.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemInTransactionDetailDtoFactory factory()
 */
class ItemInTransactionDetailDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
