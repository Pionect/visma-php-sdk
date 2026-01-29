<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Offset account* &gt; The account to be updated by the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetAccountInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetAccountInTransactionDetailDtoFactory factory()
 */
class OffsetAccountInTransactionDetailDto extends Model
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
