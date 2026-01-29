<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The manually entered summary amount for all specified inventory items. Control Amount is available
 * only if the Validate Document Totals on Entry option is selected on the Inventory
 * Preferences form. If the Control Amount and Total Amount values do not match, the system
 * generates a warning message and the issue cannot be saved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ControlAmountInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ControlAmountInInventoryIssueUpdateDtoFactory factory()
 */
class ControlAmountInInventoryIssueUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
