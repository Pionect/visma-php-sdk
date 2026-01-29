<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The date when the receipt was created. All transactions included in this document will have this
 * transaction date.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DateInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DateInInventoryIssueUpdateDtoFactory factory()
 */
class DateInInventoryIssueUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}
