<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The date when the receipt was created. All transactions included in this document will have this
 * transaction date.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DateInInventoryTransferUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DateInInventoryTransferUpdateDtoFactory factory()
 */
class DateInInventoryTransferUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}
