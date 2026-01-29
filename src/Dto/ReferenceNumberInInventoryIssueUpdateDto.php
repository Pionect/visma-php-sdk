<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The unique reference number of the receipt, which the system automatically assigns according to the
 * numbering sequence selected for receipts on the Inventory Preferences IN.10.10.00) form.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReferenceNumberInInventoryIssueUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReferenceNumberInInventoryIssueUpdateDtoFactory factory()
 */
class ReferenceNumberInInventoryIssueUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
