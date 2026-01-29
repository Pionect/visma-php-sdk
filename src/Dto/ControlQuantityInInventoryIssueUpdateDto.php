<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The manually entered quantity of inventory items. Control Qty. is available only if the Validate
 * Document Totals on Entry option is selected on the Inventory Preferences form. If the Control
 * Qty. and Total Qty.values do not match, the system generates a warning message and the issue
 * cannot be saved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ControlQuantityInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ControlQuantityInInventoryIssueUpdateDtoFactory factory()
 */
class ControlQuantityInInventoryIssueUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
