<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Offset cash account &gt; The cash account to be used for the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetCashAccountInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetCashAccountInTransactionDetailDtoFactory factory()
 */
class OffsetCashAccountInTransactionDetailDto extends Model
{
    #[Property]
    public ?string $type;

    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
